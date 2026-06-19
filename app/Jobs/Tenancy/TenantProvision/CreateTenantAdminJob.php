<?php

namespace App\Jobs\Tenancy\TenantProvision;

use App\Models\User;
use App\Models\Tenant;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Log;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Modules\User\Http\Requests\UserRequest;
use Modules\Tenant\Http\Requests\TenantRequest;

class CreateTenantAdminJob implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(public Tenant $tenant, public array $request)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $this->tenant->makeCurrent();
        
        $user = User::create($this->request);
        $user->assignRole([
            Role::findByName('tenant', 'sanctum'),
            Role::findByName('tenant', 'web'),
        ]);


        $this->tenant->forgetCurrent();
        // logger()->info("Tenant Admin Job Completed");
    }
}
