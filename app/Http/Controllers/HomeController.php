<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\View;

use App\Models\Session as Sess;
use App\Models\Theme;
use App\Models\User;

use App\Models\Module\Odp;

class HomeController extends Controller
{
    private $sess;
    private $theme;
    private $user;

    public function __construct()
    {
        $this->middleware('auth');
        $this->sess = new Sess();
        $this->theme = new Theme();
        $this->user = new User();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        if (view()->exists($request->path())) {
            return view($request->path());
        }
        return abort(404);
    }

    public function root()
    {
        
        $this->sess->where('id', session()->getId())->update(['last_login' => now()]);
        
        $user = Auth::user(); // get user auth data
        $ipAddress = request()->ip(); // get ip address
        $login = $this->sess->where('user_id', Auth::id())->orderBy('last_login','desc')->first();
        // add theme
        
        $checkuserintheme = $this->theme->where('user_id',$user->id)->get();
        if(count($checkuserintheme) < 1) {
            $updtheme = $this->theme->create([
                'user_id' => $user->id
            ]);
            
            $this->user->where('id',$user->id)->update([
                'theme_id' => $updtheme->id
            ]);

        }

        // add theme

        // calculate date
        $now = Carbon::now();
        $dateStringsession = $login->last_login;
        $datesession = Carbon::createFromFormat('Y-m-d H:i:s', '2023-06-27 13:25:24');
        // dd($datesession);
        $d1= $now->format('Y-m-d H:i:s');
        $d2= $datesession->format('Y-m-d H:i:s');
        $date1 = Carbon::createFromFormat('Y-m-d H:i:s', $d1);
        $date2 = Carbon::createFromFormat('Y-m-d H:i:s', $d2);
        $diff=abs($date1->getTimestamp() - $date2->getTimestamp())/60;
        // calculate date

    
        if (($diff <= 60) && ($login->ip_address)!=$ipAddress) { // if session not expired and when ip address !== last login
            Auth::logout();    
            session()->flash('error', "You are Logged in on other devices. ( ".$login->ip_address." )");
            return redirect('login');
        } else {
            if (($diff>60) || ($login->ip_address==$ipAddress)){ // if session expired or when ip address == last login
                $this->sess->where('user_id',$user->id)
                ->update([
                    'user_id' => null
                ]);
            }	
        }

        $odps = Odp::all();

        $totalOdp = $odps->count();
        $availableOdp = $odps->where('status', 'Available')->count();
        $existingOdp = $odps->where('status', 'Existing')->count();
        $brokenOdp = $odps->where('status', 'Broken')->count();

        return view('dashboard.index',compact(
            'totalOdp',
            'availableOdp',
            'existingOdp',
            'brokenOdp'
        ));
    }

    /*Language Translation*/
    public function lang($locale)
    {
        if ($locale) {
            App::setLocale($locale);
            Session::put('lang', $locale);
            Session::save();
            return redirect()->back()->with('locale', $locale);
        } else {
            return redirect()->back();
        }
    }

    public function updateProfilePicture(Request $request)
    {
        $picture = $request->file('picture');
        
        // Check if the uploaded file is an image
        if (!$picture->isValid() || !in_array($picture->getClientOriginalExtension(), ['jpg', 'jpeg', 'png', 'gif'])) {
            return response()->json(["status" => "error", "message" => $this->getMessage()['erroruploadimages']]);
        }
        
        $filename = Auth::user()->username . '.' . $picture->getClientOriginalExtension();
        $picture->move(public_path('/images/'), $filename);

        // Update the path of the uploaded file to the avatar field of the currently authenticated user
        $user = Auth::user();
        $changeimage = User::findOrFail($user->id);
        $changeimage->avatar = $filename;
        $changeimage->save();

        return response()->json(["status" => "success", "message" => $this->getMessage()['update']]);
    }

    public function updateProfile(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email'],
            'avatar' => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:1024'],
        ]);

        $user = User::find($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');

        if ($request->file('avatar')) {
            $avatar = $request->file('avatar');
            $avatarName = time() . '.' . $avatar->getClientOriginalExtension();
            $avatarPath = public_path('/images/');
            $avatar->move($avatarPath, $avatarName);
            $user->avatar =  $avatarName;
        }

        $user->update();
        if ($user) {
            Session::flash('message', 'User Details Updated successfully!');
            Session::flash('alert-class', 'alert-success');
            // return response()->json([
            //     'isSuccess' => true,
            //     'Message' => "User Details Updated successfully!"
            // ], 200); // Status code here
            return redirect()->back();
        } else {
            Session::flash('message', 'Something went wrong!');
            Session::flash('alert-class', 'alert-danger');
            // return response()->json([
            //     'isSuccess' => true,
            //     'Message' => "Something went wrong!"
            // ], 200); // Status code here
            return redirect()->back();

        }
    }

    public function updatePassword(Request $request, $id)
    {
        $request->validate([
            'current_password' => ['required', 'string'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);

        if (!(Hash::check($request->get('current_password'), Auth::user()->password))) {
            return response()->json([
                'isSuccess' => false,
                'Message' => "Your Current password does not matches with the password you provided. Please try again."
            ], 200); // Status code
        } else {
            $user = User::find($id);
            $user->password = Hash::make($request->get('password'));
            $user->update();
            if ($user) {
                Session::flash('message', 'Password updated successfully!');
                Session::flash('alert-class', 'alert-success');
                return response()->json([
                    'isSuccess' => true,
                    'Message' => "Password updated successfully!"
                ], 200); // Status code here
            } else {
                Session::flash('message', 'Something went wrong!');
                Session::flash('alert-class', 'alert-danger');
                return response()->json([
                    'isSuccess' => true,
                    'Message' => "Something went wrong!"
                ], 200); // Status code here
            }
        }
    }
}
