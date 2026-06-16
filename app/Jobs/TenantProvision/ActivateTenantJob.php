<?php

namespace App\Jobs\TenantProvision;

use App\Models\Tenant;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;

class ActivateTenantJob implements ShouldQueue
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

        $this->tenant->update([
            'is_active' => true,
        ]);

        $this->tenant->forgetCurrent();
    }
}
