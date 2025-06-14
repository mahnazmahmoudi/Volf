<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $super_admin_role = Role::create(['guard_name' => 'admins', 'name' => 'super-admin', 'fa_name' => 'سوپر ادمین']);
        $admin_role = Role::create(['guard_name' => 'admins', 'name' => 'admin', 'fa_name' => 'ادمین']);

        $super_admin = Admin::create([
            'full_name' => 'Super Admin',
            'email' => 'superadmin@gmail.com',
            'password' => Hash::make('123456789'),
        ]);

        $admin = Admin::create([
            'full_name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456789'),
        ]);

        $super_admin->assignRole('super-admin');
        $admin->assignRole('admin');

        $super_admin_role->givePermissionTo(Permission::all());
        $admin_role->givePermissionTo(Permission::all());
    }
}
