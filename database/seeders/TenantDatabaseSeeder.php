<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\TenantRolesAndPermissionsSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TenantDatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            TenantRolesAndPermissionsSeeder::class,
        ]);
    }
}
