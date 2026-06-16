<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
     public function up(): void
    {
        $this->migrator->add('system.site_name', 'My SAAS App');
        $this->migrator->add('system.company_email', 'info@velmaxtechnologies.com');
        $this->migrator->add('system.maintenance_mode', false);
    }
};
