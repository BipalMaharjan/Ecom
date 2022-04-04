<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function vendor_products()
    {
        return $this->hasMany(VendorProduct::class);
    }
    public function getImageAttribute($value)
{
    // return "https://i.pravatar.cc/200?u=" . $this->email;
    return (is_file(public_path('storage/'.$value)))?asset('storage/'.$value):asset('images/brand/01.jpg');
    // return asset($value ?: '/images/logo.png');
    // return asset('storage/'.$value ?: '/images/logo.png');
}
}
