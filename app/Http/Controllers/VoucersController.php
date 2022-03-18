<?php

namespace App\Http\Controllers;

use App\Models\Voucer;
use Illuminate\Http\Request;

class VoucersController extends Controller
{
    public function index(Request $request)
    {
        if (isset($request->kode)) {
            $voucers = Voucer::where('kode', $request->kode)->first();
        } else {
            $voucers = Voucer::all();
        }

        if ($voucers) {
            return response()->json([
                'status_code' => 200,
                'datas' => $voucers
            ]);
        }

        return response()->json([
            'status_code' => 404,
            'message' => 'Data tidak ditemukan'
        ]);
    }

    public function detail(Request $request)
    {
        $id = $request->id;
        $data = Voucer::find($id);

        return response()->json([
            'status_code' => 200,
            'voucer' => $data->nominal
        ]);
    }
}
