<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Vendor;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Super',
            'email' => 'super@gmail.com',
            'password' => bcrypt('super1234')
        ]);

        $role = Role::create(['name' => 'Super-Admin']);
        $permissions = Permission::pluck('id','id')->all();
        $role->syncPermissions($permissions);
        $user->assignRole([$role->id]);
        $role->revokePermissionTo('book-buy');

        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin1234')
        ]);

        $role = Role::create(['name' => 'Admin']);
        $permissions = Permission::pluck('id','id')->all();
        $role->syncPermissions($permissions);
        $user->assignRole([$role->id]);
        $role->revokePermissionTo('book-buy','admin-create','admin-delete');



        $user = User::create([
            'name' => 'customer',
            'email' => 'customer@gmail.com',
            'password' => bcrypt('customer1234')
        ]);

        $role = Role::create(['name' => 'Customer']);
        $role->givePermissionTo('book-list','book-buy');
        $user->assignRole([$role->id]);

        $user = User::create([
            'name' => 'vendor',
            'email' => 'vendor@gmail.com',
            'password' => bcrypt('vendor1234')
        ]);

        Vendor::create([
            'user_id' => $user->id,
            'full_name'=>$user->name,
            'email' => 'vendor@gmail.com',
        ]);

        $role = Role::create(['name' => 'Vendor']);
        $role->givePermissionTo('product-list','product-create','product-edit','product-delete');
        $user->assignRole([$role->id]);

    }
}
