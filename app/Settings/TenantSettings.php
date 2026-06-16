<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class TenantSettings extends Settings
{
    public string $company_name;
    public string $support_email;
    public bool $maintenance_mode;

    public static function group(): string
    {
        return 'tenant';
    }
}