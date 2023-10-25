<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.products.product',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.products.add_product');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Product::create([
            'name' => $request->name,
            'short_description' => $request->short_description,
            'quantity' => $request->quantity,
            'price' => $request->price,
            'width' => $request->width,
            'weight' => $request->weight,
            'height' => $request->height,
            'lenght' => $request->lenght,
            'image' => $request->image,
            'user_id' => $request->user_id,
            'warehouse_id' => $request->warehouse_id,
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::find($id);
        return view('admin.products.single_product',compact('product'));
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
        $user = Product::find($id);
        $user->update([
            'name' => $request->name,
            'short_description' => $request->short_description,
            'quantity' => $request ->quantity,
            'price' => $request->price,
            'width' => $request->width,
            'weight' => $request->weight,
            'height' => $request->height,
            'lenght' => $request->lenght,
            'user_id' => $request->user_id,
            'warehouse_id' => $request->warehouse_id
        ]);
        session()->flash('success','Record has been updatede successfuly!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
