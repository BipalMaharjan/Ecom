<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Vendor;
use App\Models\VendorProduct;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:product-list|product-create|product-edit|product-delete', ['only' => ['index','show']]);
         $this->middleware('permission:product-create', ['only' => ['create','store']]);
         $this->middleware('permission:product-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:product-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth()->user()->hasRole('Vendor')){
            $vendorId=auth()->user()->vendor->id;
            $products = VendorProduct::where('vendor_id',$vendorId)->latest()->paginate(5);
        }elseif(1){
            $products = VendorProduct::latest()->paginate(5);
        }
        return view('products.index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vendors = Vendor::all();
        $brands = Brand::all();
        $categories = Category::all();
        $user=auth()->user();
        return view('products.create',compact('vendors','user','brands','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       request()->validate([
            'name' => 'required',
            'price' => 'required',
            'discount' => 'required',
            'stock' => 'required',
            'category' => 'required',
            'vendor_id' => 'required',
            'brand_id' => 'required',
            'description' => 'required',
        ]);
        $product = Product::where('name',strtolower($request->name))->first();
        if(!$product)
        {
            $product= Product::create([
                'name'=>$request->name,
            ]);
        }
        if ($request->hasFile('file')) {
            $filePath= $request->file->store('product', 'public');
            $vendor_product = VendorProduct::create([
                'product_id' => $product->id,
                'price' => $request->price,
                'discount' => $request->discount,
                'stock' => $request->stock,
                'vendor_id' => $request->vendor_id,
                'brand_id' => $request->brand_id,
                'description' => $request->description,
                'image'=>$filePath,
            ]);
        }else{
            $vendor_product = VendorProduct::create([
                'product_id' => $product->id,
                'price' => $request->price,
                'discount' => $request->discount,
                'stock' => $request->stock,
                'vendor_id' => $request->vendor_id,
                'brand_id' => $request->brand_id,
                'description' => $request->description,
            ]);
        }

            $vendor_product->categories()->sync($request['category']);
            return redirect()->route('products.index')
            ->with('success','Product created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(VendorProduct $vendor_product)
    {
        return view('products.show',compact('vendor_product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vendor_product = VendorProduct::find($id);
        $categories = Category::all();
        $vendors = Vendor::all();
        $brands = Brand::all();
        $user=auth()->user();

        return view('products.edit',compact('vendor_product','user','brands','vendors','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {


        $vendor_product = VendorProduct::find($id);
        request()->validate([
            'name' => 'required',
            'price' => 'required',
            'discount' => 'required',
            'stock' => 'required',
            'category' => 'required',
            'vendor_id' => 'required',
            'brand_id' => 'required',
            'description' => 'required',
        ]);

        $product = Product::where('name',strtolower($request->name))->first();
        if(!$product)
        {
            $product= Product::create([
                'name'=>$request->name,
            ]);
        }
        $vendor_product->update([
            'vendor_id' => $request->vendor_id,
            'product_id' => $product->id,
            'price' => $request->price,
            'old_price' => $vendor_product->price,
            'discount' => $request->discount,
            'stock' => $request->stock,
            'vendor_id' => $request->vendor_id,
            'brand_id' => $request->brand_id,
            'description' => $request->description,
        ]);
        $vendor_product->categories()->sync($request['category']);

        return redirect()->route('products.index')
                        ->with('success','Product updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vendor_product = VendorProduct::find($id);

        $vendor_product->delete();

        return redirect()->route('products.index')
                        ->with('success','Product deleted successfully');
    }
}
