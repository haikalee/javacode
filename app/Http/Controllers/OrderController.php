<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use Exception;
use Illuminate\Http\Request;

class OrderController extends Controller
{
  public function save(Request $request)
  {
    try {
      $model = Order::create($request->all());
      $this->saveDetail($model->id, $request->items);

      return response()->json([
        'status_code' => 200,
        'message' => 'Order berhasil dibuat',
      ]);
    } catch (Exception $e) {
      return response()->json([
        'status_code' => 400,
        'message' => 'Order gagal dibuat',
      ]);
    }
  }

  public function saveDetail($id, $data)
  {
    foreach ($data as $item) {
      $data = [];
      $data['order_id'] = $id;
      $data['menu_id'] = $item["id"];
      $data['harga'] = $item["harga"];
      $data['catatan'] = $item["catatan"];
      OrderDetail::create($data);
    }
  }

  public function cancel(Request $request, $id)
  {
    try {
      if (Order::where('id', $id)->get()) {
        Order::where('id', $id)->delete();
        OrderDetail::where('order_id', $id)->delete();

        return response()->json([
          'status_code' => 200,
          'message' => 'Data berhasil dihapus'
        ]);
      }

      return response()->json([
        'status_code' => 204,
        'message' => 'Data tidak ditemukan'
      ]);
    } catch (Exception $e) {
      return response()->json([
        'status_code' => 400,
        'message' => 'Order gagal dihapus',
      ]);
    }
  }
}
