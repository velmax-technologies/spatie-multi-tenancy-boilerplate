<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TenantRolesAndPermissionsSeeder extends Seeder
{
    use WithoutModelEvents;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Tenant Roles & Permissions
        Role::create(['name' => 'tenant', 'guard_name' => 'web']);
        Role::create(['name' => 'tenant', 'guard_name' => 'sanctum']);

        Role::create(['name' => 'admin', 'guard_name' => 'web']);
        Role::create(['name' => 'admin', 'guard_name' => 'sanctum']);

        Role::create(['name' => 'cashier', 'guard_name' => 'web']);
        Role::create(['name' => 'cashier', 'guard_name' => 'sanctum']);
            
    }
}
