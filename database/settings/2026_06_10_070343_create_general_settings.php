<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
     public function up(): void
    {
        
        $this->migrator->add('general.timezone', 'Africa/nairobi');
        $this->migrator->add('general.currency', 'KES');
        $this->migrator->add('general.date_format', '');
        $this->migrator->add('general.default_plan_id', 0);
        $this->migrator->add('general.theme', "light");
        $this->migrator->add('general.workspace_host', "tenancy.local");

    }
};