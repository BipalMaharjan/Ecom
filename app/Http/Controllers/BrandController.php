<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::all();
        return view('brands.index',compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('brands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'link' => '',
            'image'=> 'mimes:png,jpg,bmp',
        ]);
        if ($request->hasFile('file')) {
            $filePath= $request->file->store('brand', 'public');
        Brand::create([
            'name'=>$request->name,
            'link'=>$request->link,
            'image'=>$filePath,

        ]);
        }else{
            Brand::create([
                'name'=>$request->name,
                'link'=>$request->link,
            ]);
        }
        return redirect()->route('brands.index')
        ->with('success','Brand created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        return view('brands.show',compact('brand'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        return view('brands.edit',compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Brand $brand)
    {
        $brand->update($request->validate([
            'name' => 'required',
            'link' => '',
            'image'=> 'mimes:png,jpg',
        ]));
        return redirect()->route('brands.index')
        ->with('success','Brand created successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        $brand->delete();
        return redirect()->route('categories.index')
                        ->with('success','Brand deleted successfully');
    }
}
