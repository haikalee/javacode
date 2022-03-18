<?php

namespace App\Http\Controllers;

use App\Models\Voucer;
use Exception;
use Illuminate\Http\Request;

class VoucersController extends Controller
{
    public function index(Request $request)
    {
        try {
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
                'status_code' => 204,
                'message' => 'Data tidak ditemukan'
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status_code' => 400,
                'message' => 'Data gagal ditemukan'
            ]);
        }
    }
}
