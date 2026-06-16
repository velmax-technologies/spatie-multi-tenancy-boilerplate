<?php

namespace App\Jobs\TenantProvision;

use App\Models\Tenant;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;

class RunTenantMigrationsJob implements ShouldQueue
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

        // Run tenant migrations
        Artisan::call('tenants:artisan', [
            'artisanCommand' => "migrate --path=database/migrations/tenant",
            '--tenant' => [$this->tenant->id],
        ]);

        $this->tenant->forgetCurrent();

    }
}
