<?php 

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class PlatformFeatureSettings extends Settings
{

    public bool $registration;

    public bool $trial;

    public static function group(): string
    {
        return 'platform_feature';
    }
}