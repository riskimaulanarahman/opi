<?php

namespace App\Http\Controllers;

use App\Models\Icon;
use App\Models\SideMenu;
use App\Models\Sequence;
use Illuminate\Http\Request;

class SideMenuController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     */
    public function index($route)
    {
        $sidemenu = SideMenu::select(['title', 'icon_id', 'sequence_id'])->where('route', $route)->first();
        $sequence = Sequence::select('title')->where('id', $sidemenu->sequence_id)->first();
        $icon = Icon::select('name')->where('id', $sidemenu->icon_id)->first();
        $data = array(
            'icon' => 'fa fa-table',
            'module' => $sequence->title,
            'title' => $sidemenu->title,
            'menu' => [
                    array(
                        'title' => 'Menus',
                        'routes' => 'root',
                        'submenu' => [
                            array(
                                'title' => 'subMenus',
                                'routes' => 'root',
                            ),
                            array(
                                'title' => 'subMenus 1',
                                'routes' => 'root',
                            )
                        ]
                    ),
                    array(
                        'title' => 'Menus 1',
                        'routes' => 'root',
                        'submenu' => null
                    )
                ],
            'data' => '1'
        );

        return view('grid.index')->with('data', $data);
    }
}
