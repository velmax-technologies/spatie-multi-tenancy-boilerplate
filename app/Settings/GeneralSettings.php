<?php 

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class GeneralSettings extends Settings
{
   
    public string $timezone;

    public string $currency;

    public string $date_format;

    public int $default_plan_id;

    public string $theme;
    
    public string $workspace_host;

    public static function group(): string
    {
        return 'general';
    }
}