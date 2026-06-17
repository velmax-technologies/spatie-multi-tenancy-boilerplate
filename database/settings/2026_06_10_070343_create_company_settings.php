<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
     public function up(): void
    {
        $this->migrator->add('company.company_name', 'Velmax technologies');
        $this->migrator->add('company.company_registration', '');
        $this->migrator->add('company.tax_number', '');
        $this->migrator->add('company.email', 'info@velmaxtechnologies.com');
        $this->migrator->add('company.phone', '+254708222536');
        $this->migrator->add('company.website', 'http://velmaxtechnologies.com');
        $this->migrator->add('company.address', '');
        $this->migrator->add('company.logo', '');
        $this->migrator->add('company.favicon', '');
        $this->migrator->add('company.timezone', 'Africa/nairobi');
        $this->migrator->add('company.currency', 'KES');
    }
};
