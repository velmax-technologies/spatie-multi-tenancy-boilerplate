<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Plan::create([
            'name' => 'Starter',
            'code' => 'starter',
            'price' => 199,
            'users_limit' => 5,
            'branches_limit' => 1,
            'features' => [
                'inventory',
                'sales',
                'reports'
            ],
        ]);

        Plan::create([
            'name' => 'Professional',
            'code' => 'pro',
            'price' => 499,
            'users_limit' => 20,
            'branches_limit' => 5,
            'features' => [
                'inventory',
                'sales',
                'reports',
                'api_access',
                'multi_branch'
            ],
        ]);
    }
}
