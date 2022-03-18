<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Exception;
use Illuminate\Http\Request;

class MenusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        try {
            $datas = Menu::select('id', 'nama', 'harga', 'tipe', 'gambar')->get();

            if ($datas) {
                return response()->json([
                    'status_code' => 200,
                    'datas' => $datas
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
