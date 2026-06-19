<?php

namespace Modules\Tenant\Http\Requests;

use Illuminate\Support\Str;
use App\Rules\ValidSubdomain;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use App\Settings\TenantProvisioningSettings;
use Illuminate\Contracts\Validation\Validator;

class TenantRequest extends FormRequest
{

    public function rules(): array
    {
        $requestMethod = $this->getMethod();
        
        $rules = [];

        if ($requestMethod === 'POST') {
            // validation for store request
            $rules['business_name'] = 'required|string|min:6|max:255|unique:tenants,business_name';
            $rules['slug'] = 'required|string|unique:tenants,slug';
            $rules['owner_name'] = 'required|string|min:3|max:255';
            $rules['name'] = 'required|string|min:3|max:255';
            $rules['username'] = 'required|string|min:3|max:255|alpha_num|unique:tenants,username';
            $rules['email'] = 'required|email|max:255|unique:tenants,email';
            $rules['phone'] = 'nullable|string|max:15';
            $rules['password'] = 'required|string|min:8';
            $rules['database'] = 'required|string|min:4';
            $rules['subdomain'] = ['required', new ValidSubdomain(), 'unique:tenants,subdomain'];                    
        }
        if ($requestMethod === 'PUT' || $requestMethod === 'PATCH') {
            // validation for update request
            $rules['business_name'] = 'sometimes|required|string|min:6|max:255|unique:users,owner_name,' . $this->route('tenant');
            $rules['owner_name'] = 'sometimes|required|string|min:3|max:255';
            $rules['email'] = 'sometimes|required|email|max:255|unique:users,email,' . $this->route('tenant');
            $rules['phone'] = 'nullable|string|max:15';
            //$rules['subdomain'] = 'sometimes|required|string|min:4';
        }
       
        // Common rules for both creation and update
        $rules['is_active'] = 'sometimes|boolean';

        // If domains are provided, validate them
        if ($this->has('domains')) {
            $rules['domains'] = 'array';
            $rules['domains.*'] = 'unique:domains,domain';  
        }

        // Return the validation 
        return $rules;
    }

    protected function prepareForValidation(): void
    {
        $settings = app(TenantProvisioningSettings::class);

        $databasePrefix = $settings->tenant_db_prefix;

        $this->merge([
            'database' => strtolower($databasePrefix . Str::slug($this->username, '_')),
            'slug' => Str::slug($this->business_name, '_'),
            'name' => $this->owner_name,
            'subdomain' => $this->username,
        ]);
    }

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }
}
