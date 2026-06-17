<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('tenant.company_name', 'New Company');
        $this->migrator->add('tenant.support_email', 'support@company.com');
        $this->migrator->add('tenant.maintenance_mode', false);
    }
};
