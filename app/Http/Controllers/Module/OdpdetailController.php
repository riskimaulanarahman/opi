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

            $odc = $this->odcdetail->where('panel_id',$request->req_id)->first();
            $panel = $this->panel->where('id',$odc->panel_id)->first();

            $requestData = [
                'odcdetails_id' => $odc->id,
                'odpName' => $request->odpName,
                'noPanel' => $request->noPanel,
                'noPort' => $request->noPort,
            ];

            // Validasi 1: Periksa duplikat 'odpName' pada panel feeder
            if ($panel->noPanel >= 1 && $panel->noPanel <= 4) {
                $getfeeder = $this->panel
                            ->where('noPanel','>=',1)
                            ->where('noPanel','<=',4)
                            ->where('status',1)
                            ->get();

                if(count($getfeeder) > 0) {

                    foreach ($getfeeder as $key) {
                        $idpanelfeeder[] = $key->id;
                    }

                    $getodc = $this->odcdetail->whereIn('panel_id',$idpanelfeeder)->get();
                    foreach ($getodc as $key) {
                        $idodcdetailfeeder[] = $key->id;
                    }

                    $getodp = $this->model->whereIn('odcdetails_id',$idodcdetailfeeder)->get();

                    $odpNameToFind = $request->odpName;
                    $odpNames = $getodp->where('odpName', $odpNameToFind)->pluck('odpName')->toArray();
            
                    if(count($odpNames) > 0) {
                        return response()->json(["status" => "error", "message" => "Duplikat 'odpName' pada panel feeder"]);
                    } else {
                        $this->model->create($requestData);
                    }

                } else {
                    $this->model->create($requestData);
                }
            }

            // Validasi 2: Periksa duplikat 'odpName' pada panel distribusi
            if ($panel->noPanel >= 5 && $panel->noPanel <= 12) {
                $getdistribusi = $this->panel
                            ->where('noPanel','>=',5)
                            ->where('noPanel','<=',12)
                            ->where('status',1)
                            ->get();
                if(count($getdistribusi) > 0) {

                    foreach ($getdistribusi as $key) {
                        $idpaneldistribusi[] = $key->id;
                    }

                    $getodc = $this->odcdetail->whereIn('panel_id',$idpaneldistribusi)->get();
                    foreach ($getodc as $key) {
                        $idodcdetaildistribusi[] = $key->id;
                    }

                    $getodp = $this->model->whereIn('odcdetails_id',$idodcdetaildistribusi)->get();

                    $odpNameToFind = $request->odpName;
                    $odpNames = $getodp->where('odpName', $odpNameToFind)->pluck('odpName')->toArray();
            
                    if(count($odpNames) > 0) {
                        return response()->json(["status" => "error", "message" => "Duplikat 'odpName' pada panel distribusi"]);
                    } else {
                        $this->model->create($requestData);
                    }

                } else {
                    $this->model->create($requestData);
                }

            }

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

            $odpdetail = $this->model->where('odpName',$request->odpname)->get();
            foreach($odpdetail as $key) {
                $idodc[] = $key->odcdetails_id;
            }
            $odcdetail = $this->odcdetail->whereIn('id',$idodc)->get();
            foreach($odcdetail as $key) {
                $idpanel[] = $key->panel_id;
            }
            $data = $this->panel->whereIn('id',$idpanel)->get();

            return response()->json(["status" => "show", "message" => $this->getMessage()['show'] , 'data' => $data]);

        } catch (\Exception $e) {

            return response()->json(["status" => "error", "message" => "ODP tidak ditemukan"]);
        }

    }

    public function update(Request $request, $id)
{
    try {
        $odp = $this->model->find($id);
        $odc = $this->odcdetail->find($odp->odcdetails_id);
        // $odc = $this->odcdetail->where('panel_id', $odcx->panel_id)->first();
        $panel = $this->panel->where('id', $odc->panel_id)->first();

        

        // Validasi 1: Periksa duplikat 'odpName' pada panel feeder
        if ($request->has('odpName')) {
            $requestData['odpName'] = $request->odpName;
            if ($panel->noPanel >= 1 && $panel->noPanel <= 4) {
                $getfeeder = $this->panel
                    ->where('noPanel', '>=', 1)
                    ->where('noPanel', '<=', 4)
                    ->where('status', 1)
                    ->get();

                if (count($getfeeder) > 0) {
                    foreach ($getfeeder as $key) {
                        $idpanelfeeder[] = $key->id;
                    }

                    $getodc = $this->odcdetail->whereIn('panel_id', $idpanelfeeder)->get();
                    foreach ($getodc as $key) {
                        $idodcdetailfeeder[] = $key->id;
                    }

                    $getodp = $this->model->whereIn('odcdetails_id', $idodcdetailfeeder)
                        ->where('id', '!=', $id) // Exclude the current record from duplication check
                        ->get();

                    $odpNameToFind = $request->odpName;
                    $odpNames = $getodp->where('odpName', $odpNameToFind)->pluck('odpName')->toArray();

                    if (count($odpNames) > 0) {
                        return response()->json(["status" => "error", "message" => "Duplikat 'odpName' pada panel feeder"]);
                    } else {
                        $this->model->where('id', $id)->update($requestData);
                    }
                } else {
                    $this->model->where('id', $id)->update($requestData);
                }
            }

            // Validasi 2: Periksa duplikat 'odpName' pada panel distribusi
            if ($panel->noPanel >= 5 && $panel->noPanel <= 12) {
                $getdistribusi = $this->panel
                    ->where('noPanel', '>=', 5)
                    ->where('noPanel', '<=', 12)
                    ->where('status', 1)
                    ->get();

                if (count($getdistribusi) > 0) {
                    foreach ($getdistribusi as $key) {
                        $idpaneldistribusi[] = $key->id;
                    }

                    $getodc = $this->odcdetail->whereIn('panel_id', $idpaneldistribusi)->get();
                    foreach ($getodc as $key) {
                        $idodcdetaildistribusi[] = $key->id;
                    }

                    $getodp = $this->model->whereIn('odcdetails_id', $idodcdetaildistribusi)
                        ->where('id', '!=', $id) // Exclude the current record from duplication check
                        ->get();

                    $odpNameToFind = $request->odpName;
                    $odpNames = $getodp->where('odpName', $odpNameToFind)->pluck('odpName')->toArray();

                    if (count($odpNames) > 0) {
                        return response()->json(["status" => "error", "message" => "Duplikat 'odpName' pada panel distribusi"]);
                    } else {
                        $this->model->where('id', $id)->update($requestData);
                    }
                } else {
                    $this->model->where('id', $id)->update($requestData);
                }
            }
        } else {
            $requestData = [
                'odcdetails_id' => $odc->id,
                // 'odpName' => $request->odpName,
                'noPanel' => $request->noPanel,
                'noPort' => $request->noPort,
            ];
            $this->model->where('id', $id)->update($requestData);
        }

        return response()->json(["status" => "success", "message" => $this->getMessage()['store']]);
    } catch (\Exception $e) {
        return response()->json(["status" => "error", "message" => $e->getMessage()]);
    }
}


    // public function update(Request $request, $id)
    // {
    //     try {
            
    //         $requestData = $request->all();

    //         $data = $this->model->findOrFail($id);
    //         $data->update($requestData);

    //         return response()->json(["status" => "success", "message" => $this->getMessage()['update']]);

    //     } catch (\Exception $e) {

    //         return response()->json(["status" => "error", "message" => $e->getMessage()]);
    //     }
    // }

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
