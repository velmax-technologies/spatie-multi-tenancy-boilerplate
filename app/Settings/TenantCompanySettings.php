<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class TenantCompanySettings extends Settings
{
    public string $business_name;
    public string $tax_number;
    public string $email;
    public string $timezone;
    public string $currency;
    public int $default_spplier_id;


    public static function group(): string
    {
        return 'tenant_company';
    }
}