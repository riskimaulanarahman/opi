<?php

namespace App\Http\Controllers\Module;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

use App\Models\Module\Odc;
use App\Models\Module\Panel;
use App\Models\Module\Dataodc;
use App\Models\Module\Odcdetail;

class OdcController extends Controller
{
    private $model;
    public $panel;
    public $dataodc;
    public $odcdetail;

    public function __construct()
    {
        $this->model = new Odc();
        $this->panel = new Panel();
        $this->dataodc = new Dataodc();
        $this->odcdetail = new Odcdetail();
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
            $requestData = $request->all();
            $odcName = $requestData['odcName'];
        
            // Memastikan odcName unik
            $existingData = $this->model->where('odcName', $odcName)->exists();
            if ($existingData) {
                return response()->json([
                    "status" => "error",
                    "message" => "odcName must be unique"
                ]);
            }
        
            // Mulai transaksi
            DB::beginTransaction();
        
            try {
                // Membuat data ODC
                $odc = $this->model->create($requestData);
        
                // Membuat data ODC lainnya terkait
                $dataodc = $this->dataodc->insertGetId([
                    'odc_id' => $odc->id
                ]);
        
                // Membuat data panel
                for ($noPanel = 1; $noPanel <= 12; $noPanel++) {
                    for ($noPort = 1; $noPort <= 12; $noPort++) {
                        $panel = $this->panel->insertGetId([
                            'dataodcs_id' => $dataodc,
                            'noPanel' => $noPanel,
                            'noPort' => $noPort,
                            'status' => 0
                        ]);
                        $this->odcdetail->insert([
                            'panel_id' => $panel
                        ]);
                    }
                }
        
                // Commit transaksi jika tidak ada kesalahan
                DB::commit();
        
                return response()->json([
                    "status" => "success",
                    "message" => $this->getMessage()['store']
                ]);
            } catch (\Exception $e) {
                // Batalkan perubahan jika terjadi kesalahan
                DB::rollBack();
        
                return response()->json([
                    "status" => "error",
                    "message" => $e->getMessage()
                ]);
            }
        } catch (\Exception $e) {
            return response()->json([
                "status" => "error",
                "message" => $e->getMessage()
            ]);
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

            if ($data) {
                $dataodc = $this->dataodc->where('odc_id', $data->id)->get();
                foreach ($dataodc as $d) {
                    $panel = $this->panel->where('dataodcs_id', $d->id)->get();
                    foreach ($panel as $p) {
                        $odcdetail = $this->odcdetail->where('panel_id',$p->id)->get();
                        foreach ($odcdetail as $o) {
                            $o->delete();
                        }
                        $p->delete();
                    }
                    $d->delete();
                }
            }

            $data->delete();

            return response()->json(["status" => "success", "message" => $this->getMessage()['destroy']]);

        } catch (\Exception $e) {

            return response()->json(["status" => "error", "message" => $e->getMessage()]);
        }
    }
}
