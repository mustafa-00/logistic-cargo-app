<?php

namespace App\Http\Controllers\Website_Custom;

use App\Http\Controllers\Controller;
use App\Models\Ourmission;
use Illuminate\Http\Request;

class OurmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ourmissions = Ourmission::all();
        return view('admin.Website_Custom.ourmission',compact('ourmissions'));
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
            'subtittle' => 'required|min:5|max:100',
            'description' => 'required|min:5|max:255',
            'secondsubtittle' => 'required|min:5|max:100',
            'seconddescription' => 'required|min:5|max:255',
            'button' => 'required|min:5|max:100',
        ]);

        Ourmission::create([
            'tittle' => $request->tittle,
            'subtittle' => $request->subtittle,
            'description' => $request->description,
            'secondsubtittle' => $request->secondsubtittle,
            'seconddescription' => $request->seconddescription,
            'button' => $request->button,
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
    public function edit(Ourmission $ourmission)
    {
        $ourmissions = Ourmission::all();
        return view('admin.Website_Custom.ourmission',compact('ourmission','ourmissions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ourmission $ourmission)
    {
        $ourmission->update([
            'tittle' => $request->tittle,
            'subtittle' => $request->subtittle,
            'description' => $request->description,
            'secondsubtittle' => $request->secondsubtittle,
            'seconddescription' => $request->seconddescription,
            'button' => $request->button,
        ]);

        return redirect()->route('ourmission.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Ourmission::find($id)->delete();
        return back();
    }
}
