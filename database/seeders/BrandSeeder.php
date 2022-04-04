<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brand::create([
            'name' => 'Brand A',
            'link' => 'brandA.com',
            'image' => 'C:\work\ecom\public\images\brand\01.jpg'
        ]);

        Brand::create([
            'name' => 'Brand B',
            'link' => 'brandB.com',
            'image' => 'C:\work\ecom\public\images\brand\01.jpg'
        ]);

        Brand::create([
            'name' => 'Brand C',
            'link' => 'brCndA.com',
            'image' => 'C:\work\ecom\public\images\brand\01.jpg'
        ]);
    }
}
