<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['guard_name' => 'admins', 'name' => 'admins-index', 'fa_name' => 'مشاهده ادمین ها']);
        Permission::create(['guard_name' => 'admins', 'name' => 'admins-store', 'fa_name' => 'افزودن ادمین ها']);
        Permission::create(['guard_name' => 'admins', 'name' => 'admins-update', 'fa_name' => 'ویرایش ادمین ها']);
        Permission::create(['guard_name' => 'admins', 'name' => 'admins-delete', 'fa_name' => 'حذف ادمین ها']);

        Permission::create(['guard_name' => 'admins', 'name' => 'services-index', 'fa_name' => 'مشاهده سرویس ها']);
        Permission::create(['guard_name' => 'admins', 'name' => 'services-create', 'fa_name' => 'ایجاد سرویس ها']);
        Permission::create(['guard_name' => 'admins', 'name' => 'services-store', 'fa_name' => 'افزودن سرویس ها']);
        Permission::create(['guard_name' => 'admins', 'name' => 'services-update', 'fa_name' => 'ویرایش سرویس ها']);
        Permission::create(['guard_name' => 'admins', 'name' => 'services-delete', 'fa_name' => 'حذف سرویس ها']);

    }
}
