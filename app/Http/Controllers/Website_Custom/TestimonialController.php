<?php

namespace App\Http\Controllers\Website_Custom;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('admin.Website_Custom.testimonial',compact('testimonials'));
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
            'description' => 'required|min:5|max:255',
            'photo' => 'required|image',
            'name' => 'required|min:5|max:100',
            'job' => 'required|min:5|max:100',
        ]);

        $testimonial = new Testimonial();
        $testimonial['description'] = $request->description;
        $testimonial['name'] = $request->name;
        $testimonial['job'] = $request->job;
        if($request->photo){
            date_default_timezone_set("Asia/Kabul");
            $fileName = 'testimonial_'.date('Ymd-His').'_'.rand(10,100000).'.'.$request->photo->extension();
            $request->photo->storeAs('storage/testimonial',$fileName);
            $testimonial['photo'] = "/storage/testimonial/$fileName";
        }
        $testimonial->save();
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
    public function edit(Testimonial $testimonial)
    {
        $testimonials = Testimonial::all();
        return view('admin.Website_Custom.testimonial',compact('testimonial','testimonials'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $testimonial = new Testimonial();
        $testimonial['description'] = $request->description;
        $testimonial['name'] = $request->name;
        $testimonial['job'] = $request->job;
        if($request->photo){
            date_default_timezone_set("Asia/Kabul");
            $fileName = 'testimonial_'.date('Ymd-His').'_'.rand(10,100000).'.'.$request->photo->extension();
            $request->photo->storeAs('storage/testimonial',$fileName);
            $testimonial['photo'] = "/storage/testimonial/$fileName";

        }
        // dd('photo');
        $testimonial->save();
        return redirect()->route('testimonial.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        @unlink(public_path().'/'.$testimonial->photo);
        $testimonial->delete();
        return back();
    }
}
