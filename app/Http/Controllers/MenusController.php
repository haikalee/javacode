<?php

namespace App\Http\Controllers;

use App\Models\Menu;
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
        dd($request->all());
        $datas = Menu::all();
        return response()->json([
            'status_code' => 200,
            'datas' => $datas
        ]);
    }
}
