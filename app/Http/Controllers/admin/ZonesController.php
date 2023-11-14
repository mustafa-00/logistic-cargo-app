<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use App\Models\Warehouse;
use App\Models\Zone;
use Illuminate\Http\Request;

class ZonesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $zone = Zone::all();
        $zone = Zone::paginate(5);
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
        $request->validate([
            'name' => 'required|min:5|max:100',
            'address' => 'required',

        ]);

        Zone::create([
            'name' => $request->name,
            'address' => $request->address
        ]);

        session()->flash('success','Record has been created successfuly!');
        return redirect()->route('zone.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $employes = User::where('zone_id', $id)->get();
        $order = Order::where('zone_id', $id)->get();
        return view('admin.zones.single_zone', compact('employes','order'));

        // return view('admin.orders.single_order' ,compact('order'));


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, string $id)
    {
        // dd($id);
        $zone = Zone::find($id);
        return view('admin.zones.edit-zone',compact('zone'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $zone = Zone::find($id);
        $zone->update([
            'name' => $request->name,
            // 'price' => $request->price,
            'address' => $request->address
        ]);

        session()->flash('success','Record has been updated successfuly!');
        return redirect()->route('zone.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Zone::find($id)->delete();
        session()->flash('error','Record has been deleted succesfuly!');
        return back();
    }
}
