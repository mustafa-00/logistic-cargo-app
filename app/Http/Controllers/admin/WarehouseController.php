<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\Warehouse;
use Illuminate\Http\Request;

class WarehouseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.warehouse.warehouses');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.warehouse.add-warehouse');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $result = Warehouse::create([
            'name' => $request->name,
            'address' => $request->address,
            'capacity' => $request->capacity,
        ]);

        if($result){
            return redirect()->route('warehouse.index');
            session()->flash('success','Warehouse Added successfuly!');
        }else{
            session()->flush();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $order = Order::where('warehouse_id', $id)->get();
        return view('admin.warehouse.single_warehouse', compact('order'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $warehouse = Warehouse::find($id);
        return view('admin.warehouse.edit_warehouse',compact('warehouse'));

        // $warehouses = Warehouse::where('warehouse_id', $id)->get();
        // return view('admin.warehouse.edit_warehouse', compact('warehouses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = Warehouse::find($id);
        $user->update([
            'name' => $request->name,
            'address' => $request->address,
            'capacity' => $request->capacity
        ]);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Warehouse::find($id)->delete();
        return back();
    }
}
