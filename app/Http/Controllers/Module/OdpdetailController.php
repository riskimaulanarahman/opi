<?php

namespace App\Http\Controllers\Module;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

use App\Models\Module\Panel;
use App\Models\Module\Odcdetail;
use App\Models\Module\Odpdetail;

class OdpdetailController extends Controller
{
    private $model;
    public $odcdetail;
    public $panel;

    public function __construct()
    {
        $this->model = new Odpdetail();
        $this->odcdetail = new Odcdetail();
        $this->panel = new Panel();
    }

    public function index(Request $request)
    {
        try {
            
            $data = $this->model->all();

            return response()->json(['status' => "show", "message" => $this->getMessage()['show'] , 'data' => $data])->setEncodingOptions(JSON_NUMERIC_CHECK);

        } catch (\Exception $e) {

            return response()->json(["status" => "error", "message" => $e->getMessage()]);
        }
    }

    public function store(Request $request)
    {
        try {

            $getodc = $this->odcdetail->where('panel_id',$request->req_id)->first();
            $requestData = [
                'odcdetails_id' => $getodc->id,
                'odpName' => $request->odpName,
                'noPanel' => $request->noPanel,
                'noPort' => $request->noPort,
            ];

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

    public function getList($id,$modulename)
    {
        try {

            $getodc = $this->odcdetail->where('panel_id',$id)->first();
            $data = $this->model
            ->where('odcdetails_id',$getodc->id)
            ->get();

            return response()->json(["status" => "show", "message" => $this->getMessage()['show'] , 'data' => $data]);

        } catch (\Exception $e) {

            return response()->json(["status" => "error", "message" => $e->getMessage()]);
        }
    }

    public function searchodp(Request $request) 
    {
        try {

            $odpdetail = $this->model->where('odpName',$request->odpname)->first();
            $odcdetail = $this->odcdetail->where('id',$odpdetail->odcdetails_id)->first();
            $data = $this->panel->where('id',$odcdetail->panel_id)->first();

            return response()->json(["status" => "show", "message" => $this->getMessage()['show'] , 'data' => $data]);

        } catch (\Exception $e) {

            return response()->json(["status" => "error", "message" => "ODP tidak ditemukan"]);
        }

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
