<?php

namespace App\Http\Controllers\Module;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Module\Dataodc;

class DataodcController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = new Dataodc();
    }

    public function index(Request $request)
    {
        try {
            
            $data = $this->model->with('odcs')->get();

            return response()->json(['status' => "show", "message" => $this->getMessage()['show'] , 'data' => $data])->setEncodingOptions(JSON_NUMERIC_CHECK);

        } catch (\Exception $e) {

            return response()->json(["status" => "error", "message" => $e->getMessage()]);
        }
    }

    public function store(Request $request)
    {
        try {

            $requestData = $request->all();

            $this->model->create($requestData);

            return response()->json(["status" => "success", "message" => $this->getMessage()['store']]);

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

            $data = $this->model->findOrFail($id);
            $data->update($requestData);

            return response()->json(["status" => "success", "message" => $this->getMessage()['update']]);

        } catch (\Exception $e) {

            return response()->json(["status" => "error", "message" => $e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        try {

            $data = $this->model->findOrFail($id);
            $data->delete();

            return response()->json(["status" => "success", "message" => $this->getMessage()['destroy']]);

        } catch (\Exception $e) {

            return response()->json(["status" => "error", "message" => $e->getMessage()]);
        }
    }
}
