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
            'name' => 'Trial',
            'code' => 'trial',
            'price' => 0,
            'users_limit' => 3,
            'branches_limit' => 1,
            'features' => [
                'inventory',
                'sales',
                'reports'
            ],
        ]);

        Plan::create([
            'name' => 'Starter',
            'code' => 'starter',
            'price' => 2000,
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
            'price' => 5000,
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

    // TODO:: Advance plans seeder to use arrays iteration
}
