<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::all();
        return view('admin.orders.order',compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.orders.add_order');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Order::create([
            'name' => $request->name,
            'short_description' => $request->short_description,
            'quantity' => $request->quantity,
            'width' => $request->width,
            'weight' => $request->weight,
            'height' => $request->height,
            'lenght' => $request->lenght,
            'image' => $request->image,
            'source_address' => $request->source_address,
            'destination_address' => $request->destination_address,
            'date' => $request->date,
            'price' => $request->price,
            'status' => $request->status,
            'zone_id' => $request->zone_id,
            'user_id' => $request->user_id,
            'warehouse_id' => $request->warehouse_id
        ]);
        session()->flash('success','Record has been created successfuly!');
        return redirect()->route('order.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $order = Order::find($id);
        return view('admin.orders.single_order',compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = Order::find($id);
        $user->update([
            'name' => $request->name,
            'short_description' => $request->short_description,
            'quantity' => $request->quantity,
            'width' => $request->width,
            'weight' => $request->weight,
            'height' => $request->height,
            'lenght' => $request->lenght,
            'image' => $request->image,
            'source_address' => $request->source_address,
            'destination_address' => $request->destination_address,
            'date' => $request->date,
            'price' => $request->price,
            'status' => $request->status,
            'zone_id' => $request->zone_id,
            'user_id' => $request->user_id,
            'warehouse_id' => $request->warehouse_id
        ]);
        session()->flash('success','Record has been updatede successfuly!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
