<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Voucer;
use Illuminate\Http\Request;

class OrderController extends Controller
{
  public function save(Request $request)
  {
    if ($request->voucer_id) {
      Voucer::find($request->voucer_id)->update(['status' => 'non_aktif']);
    }

    if ($request->id) {
      $model = Order::where('id', $request->id)->first()->update($request->all());
      $this->updateDetail(Order::find($request->id)->first()['id'], $request->items);
    } else {
      $model = Order::create($request->all());
      $this->saveDetail($model->id, $request->items);
    }

    return response()->json([
      'status_code' => 200,
      'message' => 'Order berhasil dibuat',
    ]);
  }

  public function saveDetail($id, $data)
  {
    foreach ($data as $item) {
      $data = [];
      $data['order_id'] = $id;
      $data['menu_id'] = $item["id"];
      $data['harga'] = $item["harga"];
      OrderDetail::create($data);
    }
  }

  public function updateDetail($id, $data)
  {
    foreach ($data as $item) {
      $data = [];
      $data['id'] = $item['id'];
      $data['order_id'] = $id;
      $data['menu_id'] = $item["id"];
      $data['harga'] = $item["harga"];
      OrderDetail::where('id', $item['id'])->update($data);
    }
  }

  public function cancel(Request $request, $id)
  {
    $order = Order::find($id);

    Voucer::find($order->voucer_id)->update([
      'status' => 'aktif'
    ]);
    Order::where('id', $id)->delete();
    OrderDetail::where('order_id', $id)->delete();

    return response()->json([
      'status_code' => 200,
      'message' => 'Data berhasil dihapus'
    ]);
  }

  public function detail(Request $request, $id)
  {
    $order = Order::find($id);
    $detailOrder = OrderDetail::where('order_id', $id)->get();

    return response()->json([
      'status_code' => 200,
      'order' => $order,
      'detail_order' => $detailOrder
    ]);
  }
}
