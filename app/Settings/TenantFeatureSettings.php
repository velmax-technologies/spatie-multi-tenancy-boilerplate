<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class TenantFeatureSettings extends Settings
{
    public string $registration;
    public bool $multi_branch;
    
    public static function group(): string
    {
        return 'tenant_feature';
    }
}