<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use App\Models\Warehouse;
use App\Models\zone;
use Illuminate\Http\Request;

class ZonesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $zone = zone::all();
        return view('admin.zones.zone',compact('zone'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.zones.add-zone');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        zone::create([
            'name' => $request->name,
            'price' => $request->price
        ]);

        return redirect()->route('zone.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $employes = User::where('zone_id', $id)->get();
        return view('admin.zones.single_zone', compact('employes'));

        // $orders = Order::where('zone_id', $id)->get();
        // return view('admin.orders.single_order' ,compact('orders'));


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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
