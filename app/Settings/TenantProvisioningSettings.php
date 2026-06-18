<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class TenantProvisioningSettings extends Settings
{
    public string $tenant_db_prefix;
    public bool $auto_create_database;
    public bool $auto_create_admin;
    public bool $multi_branch;

    public static function group(): string
    {
        return 'tenant_provisioning';
    }
}