<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Apple',
        ]);

        Product::create([
            'name' => 'Banana',
        ]);

        Product::create([
            'name' => 'Carrot',
        ]);

        Product::create([
            'name' => 'Broccoli',
        ]);

        Product::create([
            'name' => 'Butter',
        ]);

        Product::create([
            'name' => 'Cheese',
        ]);

        Product::create([
            'name' => 'Egg',
        ]);

        Product::create([
            'name' => 'Lobster',
        ]);

        Product::create([
            'name' => 'Salmon',
        ]);

        Product::create([
            'name' => 'Burger',
        ]);

        Product::create([
            'name' => 'Cocktail',
        ]);
    }
}
