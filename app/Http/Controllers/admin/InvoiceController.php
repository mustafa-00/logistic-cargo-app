<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use App\Models\Order;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $invoices = Invoice::all();
        return view('admin.invoices.invoice',compact('invoices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.invoices.add_invoice');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Invoice::create([
            'payment_status' => $request->payment_status,
            'typeof_payment' => $request->typeof_payment,
            'order_id' => $request->order_id
        ]);
        session('success','Record has been saved successfuly!');
        return redirect()->route('invoice.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $order = Order::find($id);
        return view('admin.invoices.invoicepdf', ['order'=> $order]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $invoice = Invoice::find($id);
        return view('admin.invoices.single_invoice',compact('invoice'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = Invoice::find($id);
        $user->update([
            'payment_status' => $request->payment_status,
            'typeof_payment' => $request->typeof_payment,
            'order_id' => $request ->order_id,
        ]);
        session()->flash('success','Record has been updatede successfuly!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Invoice::find($id)->delete();
        return back();
    }
}
