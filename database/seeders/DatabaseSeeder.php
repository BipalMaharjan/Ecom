<?php

namespace Database\Seeders;

use App\Models\VendorProduct;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            BrandSeeder::class,
            CategorySeeder::class,
            ProductSeeder::class,
            PermissionTableSeeder::class,
            CreateAdminUserSeeder::class,
            Vendor_Product::class,

        ]);
    }
}
