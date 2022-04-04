<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function setNameAttribute($value){
        $this->attributes['name'] = strtolower($value);
    }

    public function getNameAttribute($value){
        return ucwords($value);

    }

// public function brand()
// {
//     return $this->belongsTo(Brand::class);
// }

public function brands()
{
    return $this->hasMany(Brand::class);
}



    public function vendors()
    {
        return $this->hasMany(Vendor::class);
    }
}
