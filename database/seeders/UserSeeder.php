<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      
        $user = User::factory()->create([
            'name' => 'Super Admin',
            'username' => 'superadmin',
            'email' => 'suadmin@veltech.com',
            'phone' => '0708222536',
        ]);

        $user->assignRole([
            Role::findByName('super-admin', 'sanctum'),
            Role::findByName('super-admin', 'web'),
        ]);

    
    }
}
