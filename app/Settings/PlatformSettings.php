<?php 

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class PlatformSettings extends Settings
{
    public string $support_email;

    public bool $maintenance_mode;

    public string $maintenance_message;

    public int $trial_days;

    public int $default_plan_id;
 


    public static function group(): string
    {
        return 'platform';
    }
}