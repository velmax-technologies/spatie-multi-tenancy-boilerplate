<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Central Roles & Permissions
        Role::create(['name' => 'super-admin', 'guard_name' => 'web']);
        Role::create(['name' => 'super-admin', 'guard_name' => 'sanctum']);



           
    }
}
