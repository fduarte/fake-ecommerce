<?php

namespace App\Http\Controllers;

use App\Inventory;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class OrderController extends Controller
{
    public function index()
    {
        return view('order.index');
    }

    public function edit($id)
    {
        $inventory = Inventory::where(['id' => $id])->first();
        return view('order.edit', compact( 'inventory'));
    }

    public function create()
    {
        return view('order.create');
    }

    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return Redirect::to('/order')
            ->with('success', 'Order deleted.');
    }
}
