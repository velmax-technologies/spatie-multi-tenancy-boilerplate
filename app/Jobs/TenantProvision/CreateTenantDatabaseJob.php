<?php

namespace App\Jobs\TenantProvision;

use App\Models\Tenant;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class CreateTenantDatabaseJob implements ShouldQueue
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
            "CREATE DATABASE IF NOT EXISTS `{$this->databaseName}`"
        );

        logger()->info("Tenant DB created: {$this->databaseName}");

        
    }
}
