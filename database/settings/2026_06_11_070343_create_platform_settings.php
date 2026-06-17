<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
     public function up(): void
    {
        $this->migrator->add('platform.support_email', 'info@velmaxtechnologies.com');
        $this->migrator->add('platform.maintenance_mode', false);
        $this->migrator->add('platform.maintenance_message', 'Our system is temporarily unavailable due to maintenance. Please check back shortly.');
        $this->migrator->add('platform.trial_days', 7);
        $this->migrator->add('platform.default_plan_id', 1);
    }
};
