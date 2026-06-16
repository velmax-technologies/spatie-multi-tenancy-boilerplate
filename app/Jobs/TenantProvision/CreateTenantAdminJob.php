<?php

namespace App\Jobs\TenantProvision;

use App\Models\User;
use App\Models\Tenant;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;

class CreateTenantAdminJob implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(protected Tenant $tenant)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
         // Make tenant current
        $this->tenant->makeCurrent();

        $tenantData = $this->tenant->toArray();
        unset($tenantData['id']); 

        $tenantUser = User::create($tenantData);

        // tenant admin user
        $tenantUser->assignRole('tenant');

        $this->tenant->forgetCurrent();
    }
}
