<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Dairy Items',
        ]);

        Category::create([
            'name' => 'Vegetable Items',
        ]);

        Category::create([
            'name' => 'Coffee and Drinks',
        ]);

        Category::create([
            'name' => 'Fish Items',
        ]);

        Category::create([
            'name' => 'Grocery Items',
        ]);

        Category::create([
            'name' => 'Meat Items',
        ]);

        Category::create([
            'name' => 'Fresh Fruits',
        ]);

        Category::create([
            'name' => 'Seafoods',
        ]);

        Category::create([
            'name' => 'Fastfoods',
        ]);

        Category::create([
            'name' => 'Seafoods',
        ]);

        Category::create([
            'name' => 'DryFoods',
        ]);
    }
}
