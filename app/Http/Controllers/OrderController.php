<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('orders.index', [
            'orders' => Order::get()
        ]);
    }

    public function show(Order $order)
    {
        return view('orders.show', [
            'order' => $order
        ]);
    }

    public function create()
    {
        return view('orders.create');
    }

    public function store()
    {
        Order::create($this->validateOrder());
        return redirect( route('orders.index') );
    }

    public function edit(Order $order)
    {
        return view('orders.edit', compact('order'));
    }

    public function update(Order $order)
    {
        $order->update($this->validateOrder());

        return redirect($order->path());
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return redirect( route('orders.index') );
    }

    public function validateOrder()
    {
        return request()->validate([
            'company' => 'required',
            'total'  => 'required',
            'status' => 'required'
        ]);
    }
}
