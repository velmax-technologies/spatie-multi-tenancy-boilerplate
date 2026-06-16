<?php 

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class SystemSettings extends Settings
{
    public string $site_name;

    public string $company_email;

    public bool $maintenance_mode;

    public static function group(): string
    {
        return 'system';
    }
}