<?php

namespace App\Tasks;

use Illuminate\Support\Facades\DB;
use Spatie\Multitenancy\Contracts\IsTenant;
use Spatie\Multitenancy\Tasks\SwitchTenantDatabaseTask;

class CustomSwitchTenantDatabaseTask extends SwitchTenantDatabaseTask 
{
   public function makeCurrent(IsTenant $tenant): void
    {
        config([
            'database.connections.mariadb.database' => $tenant->database,
        ]);

        DB::purge('mariadb');
        DB::reconnect('mariadb');
    }

    public function forgetCurrent(): void
    {
        DB::purge('mariadb');
        // config([
        //     'database.connections.mariadb.database' => 'spatie_multi_tenancy',
        // ]);
    }
}
