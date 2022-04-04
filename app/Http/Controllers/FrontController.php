<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\VendorProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontController extends Controller
{
    public function front()
    {
        $userId=$user = Auth::id();
        $products = Product::all();
        $brands =Brand::withCount('vendor_products')->get();
        $vendorproducts = VendorProduct::all();
        return view('welcome',compact('products','vendorproducts','brands'));
    }

    public function categories()
    {
        $userId=$user = Auth::id();
        // $categories = Category::all();

        return view('layouts.front',compact('userId'));
    }


}
