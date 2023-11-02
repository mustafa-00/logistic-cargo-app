<?php

namespace App\Http\Controllers\Website_Custom;

use App\Http\Controllers\Controller;
use App\Models\Ourteammemeber;
use Illuminate\Http\Request;

class TeammemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teammembers = Ourteammemeber::all();
        return view('admin.Website_Custom.teammember',compact('teammembers'));
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
            'photo' => 'required|image',
            'name' => 'required|min:5|max:255',
            'position' => 'required|min:5|max:100'
        ]);

        $teammember = new Ourteammemeber();
        $teammember['name'] = $request->name;
        $teammember['position'] = $request->position;
        if($request->photo){
            date_default_timezone_set("Asia/Kabul");
            $fileName = 'temmember_'.date('Ymd-His').'_'.rand(10,100000).'.'.$request->photo->extension();
            $request->photo->storeAs('storage/teammember',$fileName);
            $teammember['photo'] = "/storage/teammember/$fileName";
        }
        $teammember->save();
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
    public function edit(Ourteammemeber $teammember)
    {
        $teammembers = Ourteammemeber::all();
        return view('admin.Website_Custom.teammember',compact('teammember','teammembers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ourteammemeber $teammember)
    {
        $teammember = new Ourteammemeber();
        $teammember['name'] = $request->name;
        $teammember['position'] = $request->position;
        if($request->photo){
            date_default_timezone_set("Asia/Kabul");
            $fileName = 'ourservice_'.date('Ymd-His').'_'.rand(10,100000).'.'.$request->photo->extension();
            $request->photo->storeAs('storage/teammember',$fileName);
            $teammember['photo'] = "/storage/teammember/$fileName";

        }
        // dd('photo');
        $teammember->save();
        return redirect()->route('teammember.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ourteammemeber $teammember)
    {
        @unlink(public_path().'/'.$teammember->photo);
        $teammember->delete();
        return back();
    }
}
