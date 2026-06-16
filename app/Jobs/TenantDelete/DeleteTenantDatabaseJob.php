<?php

namespace App\Jobs\TenantDelete;

use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;

class DeleteTenantDatabaseJob implements ShouldQueue
{
    use Queueable;

     /**
     * Create a new job instance.
     */
    public function __construct( public string $databaseName)
    {
        
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
         // IMPORTANT: ensure central connection is used
        $connection = DB::connection('landlord');

        $connection->statement(
            "DROP DATABASE IF EXISTS `{$this->databaseName}`"
        );

        logger()->info("Tenant DB deleted: {$this->databaseName}");

        
    }
}
