<?php

namespace App\Http\Controllers\Website_Custom;

use App\Http\Controllers\Controller;
use App\Models\Calltoaction;
use Illuminate\Http\Request;

class CalltoactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $calltoactions = Calltoaction::all();
        return view('admin.Website_Custom.calltoaction',compact('calltoactions'));
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
            'tittle' => 'required|min:10|max:255',
            'button' => 'required|min:5|max:100'
        ]);

        Calltoaction::create([
            'tittle' => $request->tittle,
            'button' => $request->button,
        ]);
        session()->flash('success','Record has been created successfuly!');
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
    public function edit(Calltoaction $calltoaction)
    {
        $calltoactions = Calltoaction::all();
        return view('admin.Website_Custom.calltoaction',compact('calltoaction','calltoactions'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Calltoaction $calltoaction)
    {
        $calltoaction->update([
            'tittle' => $request->tittle,
            'button' => $request->button
        ]);

        session()->flash('success','Record has been updated successfuly!');
        return redirect()->route('calltoaction.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Calltoaction::find($id)->delete();
        session()->flash('error','Record has been deleted successfuly!');
        return redirect()->back();
    }
}
