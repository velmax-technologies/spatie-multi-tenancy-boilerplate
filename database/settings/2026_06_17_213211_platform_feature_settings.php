<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('platform_feature.registration', false);
        $this->migrator->add('platform_feature.trial', true);
    }
};
