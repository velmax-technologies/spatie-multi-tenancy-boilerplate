<?php

namespace App\Console\Commands;

use App\Models\Tenant;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Attributes\Description;

#[Signature('tenants:delete-databases')]
#[Description('Command description')]
class DeleteTenantDatabases extends Command
{
     public function handle(): int
    {
        if (! $this->option('force')) {
            $this->error('Use --force to confirm deletion.');
            return self::FAILURE;
        }

        $tenants = Tenant::all();

        foreach ($tenants as $tenant) {
            $database = $tenant->database;

            $this->info("Dropping database: {$database}");

            DB::connection('landlord')->statement(
                "DROP DATABASE IF EXISTS `{$database}`"
            );

            $tenant->delete();
        }

        $this->info('All tenant databases deleted.');

        return self::SUCCESS;
    }
}
