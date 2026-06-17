<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
     public function up(): void
    {
        $this->migrator->add('tenant_provisioning.tenant_db_prefix', 'tenant_');
        $this->migrator->add('tenant_provisioning.auto_create_database', true);
        $this->migrator->add('tenant_provisioning.auto_create_admin', true);
        
    }
};
