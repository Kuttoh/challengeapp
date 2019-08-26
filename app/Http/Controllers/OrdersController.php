<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrdersController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $order = new Order([
            'order_number' => $request->get('order_number'),
        ]);

        $order->save();

        return response()->json('success');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $order = Order::find($id);

        return response()->json($order);
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
