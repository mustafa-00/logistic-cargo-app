<?php

namespace App\Http\Controllers\Website_Custom;

use App\Http\Controllers\Controller;
use App\Models\Aboutus;
use Illuminate\Http\Request;

class AboutusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aboutuses = Aboutus::all();
        return view('admin.Website_Custom.aboutus',compact('aboutuses'));
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
            'subtittle' => 'required|min:5|max:100',
            'description' => 'required|min:10|max:255'
        ]);

        Aboutus::create([
            'subtittle' => $request->subtittle,
            'description' => $request->description
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
    public function edit(string $id, Aboutus $aboutus)
    {
        // dd($id);
        $aboutuses = Aboutus::all();
        return view('admin.Website_Custom.aboutus', compact('aboutus', 'aboutuses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Aboutus $aboutus)
    {
        $aboutus->update([
            'subtittle' => $request->subtittle,
            'description' => $request->description
        ]);

        session()->flash('success','Record has been updated successfuly!');
        return redirect()->route('aboutus.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Aboutus::find($id)->delete();
        session()->flash('error','Record has been deleted successfuly!');
        return redirect()->back();
    }
}
