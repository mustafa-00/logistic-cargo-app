<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Auth;

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

    public function createOrderCustomer(string $customer_id)
    {
        return view('admin.orders.add_order', ['customer_id'=> $customer_id]);
    }
    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     return view('admin.orders.add_order');
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'short_description' => 'required',
            'quantity' => 'required',
            'width' => 'required',
            'weight' => 'required',
            'height' => 'required',
            'lenght' => 'required',
            'image' => 'required',
            'source_address' => 'required',
            'destination_address' => 'required',
            'date' => 'required',
            'price' => 'required',
            'zone_id' => 'required',
            'warehouse_id' => 'required'
        ]);


        $filename = uniqid().'.'. $request->image->extension();
        $out = $request->image->storeAs('images/orders', $filename);

        Order::create([
            'name' => $request->name,
            'short_description' => $request->short_description,
            'quantity' => $request->quantity,
            'width' => $request->width,
            'weight' => $request->weight,
            'height' => $request->height,
            'lenght' => $request->lenght,
            'image' => $filename,
            'source_address' => $request->source_address,
            'destination_address' => $request->destination_address,
            'date' => $request->date,
            'price' => $request->price,
            'zone_id' => $request->zone_id,
            'user_id' => Auth::user()->id,
            'customer_id' => $request->customer_id,
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
        $customer = Customer::find($id);
        $orders = Order::where('customer_id', $customer->id)->get();
        return view('admin.customer.invoicepdf',compact('orders', 'customer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $order = Order::find($id);
        return view('admin.orders.edit-order',compact('order'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $order = Order::find($id);
        $filename = $order->image;
        if($request->image){
            $filename = uniqid().'.'. $request->image->extension();
            $out = $request->image->storeAs('images/orders', $filename);
        }

        $order->update([
            'name' => $request->name,
            'short_description' => $request->short_description,
            'quantity' => $request->quantity,
            'width' => $request->width,
            'weight' => $request->weight,
            'height' => $request->height,
            'lenght' => $request->lenght,
            'image' => $filename,
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
        Order::find($id)->delete();
        session()->flash('error','Record has been deleted successfuly!');
        return back();
    }
}
