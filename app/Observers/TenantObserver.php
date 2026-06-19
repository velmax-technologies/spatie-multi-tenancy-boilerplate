<?php

namespace App\Observers;

use Throwable;
use App\Models\User;
use App\Models\Tenant;
use App\Jobs\ProvisionTenantJob;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Bus;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Artisan;
use App\Jobs\TenantProvision\ActivateTenantJob;
use App\Jobs\TenantDelete\DeleteTenantDatabaseJob;
use App\Jobs\TenantProvision\CreateTenantAdminJob;
use App\Jobs\TenantProvision\SeedTenantDatabaseJob;
use App\Jobs\TenantProvision\RunTenantMigrationsJob;
use App\Jobs\TenantProvision\CreateTenantDatabaseJob;

class TenantObserver
{
    /**
     * Handle the Tenant "created" event.
     */
     public function created(Tenant $tenant)
    {
                
    }

    /**
     * Handle the Tenant "updated" event.
     */
    public function updated(Tenant $tenant): void
    {
        //
    }

    /**
     * Handle the Tenant "deleted" event.
     */
    public function deleted(Tenant $tenant): void
    {
        // delete tenat database
        Bus::chain([
            new DeleteTenantDatabaseJob($tenant->database),
        ])->dispatch();
    }

    /**
     * Handle the Tenant "restored" event.
     */
    public function restored(Tenant $tenant): void
    {
        //
    }

    /**
     * Handle the Tenant "force deleted" event.
     */
    public function forceDeleted(Tenant $tenant): void
    {
        //
    }
}
