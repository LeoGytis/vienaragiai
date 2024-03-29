<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Auth;


class OrderController extends Controller
{

    public function index(Request $request)
    {
        $orders = Order::orderBy('id', 'desc')->get();

        return view('orders.index', [
            'orders' => $orders,
        ]);
    }

    public function add(Request $request)
    {
        $order = new Order;

        $order->count = $request->services_count;
        $order->service_id = $request->service_id;
        $order->user_id = Auth::user()->id;

        $order->save();

        return redirect()->route('orders-show');
    }

    public function showMyOrders()
    {
        $orders = Order::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->get();
        return view('order.index', ['orders' => $orders]);
    }
}
