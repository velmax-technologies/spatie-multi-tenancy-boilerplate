<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        // tenant company settings
        $this->migrator->add('tenant_company.business_name', 'New tenant company');
        $this->migrator->add('tenant_company.tax_number', '');
        $this->migrator->add('tenant_company.email', 'support@tenant_company.com');
        $this->migrator->add('tenant_company.timezone', 'Africa/Nairobi');
        $this->migrator->add('tenant_company.currency', 'KES');
        $this->migrator->add('tenant_company.default_supplier_id', 1);

        // tenant features settings
        $this->migrator->add('tenant_feature.registration', false);
        $this->migrator->add('tenant_feature.multi_branch', true);


    }
};
