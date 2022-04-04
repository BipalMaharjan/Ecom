<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\VendorProduct;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Vendor_Product extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         VendorProduct::create([
            'product_id' => 1,
            'vendor_id' => 1,
            'brand_id' => 1,
            'price' => '20',
            'old_price' => '22',
            'discount' => '15',
            'stock' => '100',
            'image' => 'asd.jpg',
            'description' => '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum'
        ]);

        VendorProduct::create([
            'product_id' => 2,
            'vendor_id' => 1,
            'brand_id' => 2,
            'price' => '20',
            'old_price' => '22',
            'discount' => '15',
            'stock' => '100',
            'image' => 'asd.jpg',
            'description' => '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum'
        ]);

        VendorProduct::create([
            'product_id' => 3,
            'vendor_id' => 1,
            'brand_id' => 3,
            'price' => '20',
            'old_price' => '22',
            'discount' => '15',
            'stock' => '100',
            'image' => 'asd.jpg',
            'description' => '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum'
        ]);

        VendorProduct::create([
            'product_id' => 4,
            'vendor_id' => 1,
            'brand_id' => 2,
            'price' => '20',
            'old_price' => '22',
            'discount' => '15',
            'stock' => '100',
            'image' => 'asd.jpg',
            'description' => '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum'
        ]);

        VendorProduct::create([
            'product_id' => 5,
            'vendor_id' => 1,
            'brand_id' => 3,
            'price' => '20',
            'old_price' => '22',
            'discount' => '15',
            'stock' => '100',
            'image' => 'asd.jpg',
            'description' => '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum'
        ]);
        // $data->product()->attach([1]);
        // $data->vendor()->attach(1);
        // $data->brand()->attach(1);
    }
}
