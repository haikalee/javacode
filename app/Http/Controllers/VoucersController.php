<?php

namespace App\Http\Controllers;

use App\Models\Voucer;
use Illuminate\Http\Request;

class VoucersController extends Controller
{
    public function index()
    {
        $datas = Voucer::where('status', 'aktif')->get();

        return response()->json([
            'status_code' => 200,
            'datas' => $datas
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
