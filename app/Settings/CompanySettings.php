<?php 

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class CompanySettings extends Settings
{
    public string $company_name;

    public string $company_registration;

    public string $tax_number;

    public string $emai;

    public string $phone;

    public string $website;

    public string $address;

    public string $logo;

    public string $favicon;

    public string $timezone;

    public string $currency;

    public string $date_format;




    public static function group(): string
    {
        return 'company';
    }
}