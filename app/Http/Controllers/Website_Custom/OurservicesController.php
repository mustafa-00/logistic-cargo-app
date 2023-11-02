<?php

namespace App\Http\Controllers\Website_Custom;

use App\Http\Controllers\Controller;
use App\Models\Ourservice;
use Illuminate\Http\Request;

class OurservicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ourservices = Ourservice::all();
        return view('admin.Website_Custom.ourservices',compact('ourservices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tittle' => 'required|min:5|max:100',
            'description' => 'required|min:5|max:100'
        ]);

        Ourservice::create([
            'tittle' => $request->tittle,
            'description' => $request->description,
        ]);

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ourservice $ourservice)
    {
        $ourservices = Ourservice::all();
        return view('admin.Website_Custom.ourservices',compact('ourservice','ourservices'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ourservice $ourservice)
    {
        $ourservice->update([
            'tittle' => $request->tittle,
            'description' => $request->description,
        ]);

        return redirect()->route('ourservices.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Ourservice::find($id)->delete();
        return back();
    }
}
