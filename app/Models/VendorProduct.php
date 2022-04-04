<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendorProduct extends Model
{
    use HasFactory;
    protected $guarded=[];

    protected $table = 'vendor_products';

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
    public function categories()
    {
        return $this->belongsToMany(Category::class,'category_product');
    }

    public function getImageAttribute($value)
    {
    // return "https://i.pravatar.cc/200?u=" . $this->email;
    return (is_file(public_path('storage/'.$value)))?asset('storage/'.$value):asset('images/product/01.jpg');
    // return asset($value ?: '/images/logo.png');
    // return asset('storage/'.$value ?: '/images/logo.png');
    }
}
