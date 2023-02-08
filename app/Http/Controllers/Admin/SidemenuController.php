<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\SideMenu;

class SidemenuController extends Controller
{

    public function index()
    {
        try {

            $data = SideMenu::all();

            return response()->json(['status' => "show", "message" => "Menampilkan Data" , 'data' => $data]);

        } catch (\Exception $e) {

            return response()->json(["status" => "error", "message" => $e->getMessage()]);
        }
    }

    public function store(Request $request)
    {
        try {

            $requestData = $request->all();
            
            if($request->is_active) {
                ($request->is_active == 'false') ? $requestData['is_active'] = 0 : $requestData['is_active'] = 1;
            }
            if($request->is_parent) {
                ($request->is_parent == 'false') ? $requestData['is_parent'] = 0 : $requestData['is_parent'] = 1;
            }
            if($request->is_secondary_menu) {
                ($request->is_secondary_menu == 'false') ? $requestData['is_secondary_menu'] = 0 : $requestData['is_secondary_menu'] = 1;
            }
            if($request->must_full_title) {
                ($request->must_full_title == 'false') ? $requestData['must_full_title'] = 0 : $requestData['must_full_title'] = 1;
            }
            
            SideMenu::create($requestData);

            return response()->json(["status" => "success", "message" => "Berhasil Menambahkan Data"]);

        } catch (\Exception $e) {

            return response()->json(["status" => "error", "message" => $e->getMessage()]);
        }
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        try {
            
            $requestData = $request->all();

            if($request->is_active) {
                ($request->is_active == 'false') ? $requestData['is_active'] = 0 : $requestData['is_active'] = 1;
            }
            if($request->is_parent) {
                ($request->is_parent == 'false') ? $requestData['is_parent'] = 0 : $requestData['is_parent'] = 1;
            }
            if($request->is_secondary_menu) {
                ($request->is_secondary_menu == 'false') ? $requestData['is_secondary_menu'] = 0 : $requestData['is_secondary_menu'] = 1;
            }
            if($request->must_full_title) {
                ($request->must_full_title == 'false') ? $requestData['must_full_title'] = 0 : $requestData['must_full_title'] = 1;
            }
    
            $data = SideMenu::findOrFail($id);
            $data->update($requestData);

            return response()->json(["status" => "success", "message" => "Berhasil Ubah Data"]);

        } catch (\Exception $e) {

            return response()->json(["status" => "error", "message" => $e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        try {
            
            $data = SideMenu::findOrFail($id);
            $data->delete();

            return response()->json(["status" => "success", "message" => "Berhasil Hapus Data"]);

        } catch (\Exception $e) {

            return response()->json(["status" => "error", "message" => $e->getMessage()]);
        }
    }
}
