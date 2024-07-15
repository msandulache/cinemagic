<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Price;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function show(int $orderId)
    {
        $order = Order::find($orderId);

        return view('orders/show', ['order' => $order]);
    }

    public function history()
    {
        $orders = Order::where('user_id', auth()->user()->id)->orderBy('created_at', 'desc')->get();

        return view('orders/history', ['orders' => $orders]);
    }

}
