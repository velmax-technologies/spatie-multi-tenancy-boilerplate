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
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        $requestMethod = $this->getMethod();
        
        $rules = [];


        if ($requestMethod === 'POST') {
            // validation for store request
            $rules['business_name'] = 'required|string|min:6|max:255|unique:tenants,business_name';
            $rules['slug'] = 'required|string|unique:tenants,slug';
            $rules['name'] = 'required|string|min:3|max:255';
            $rules['email'] = 'required|email|max:255|unique:tenants,email';
            $rules['phone'] = 'nullable|string|max:15';
            $rules['database'] = 'required|string|min:4';
            $rules['subdomain'] = ['required', new ValidSubdomain()];
                                   
        }
        if ($requestMethod === 'PUT' || $requestMethod === 'PATCH') {
            // validation for update request
            $rules['name'] = 'sometimes|required|string|min:6|max:255';
            $rules['username'] = 'sometimes|required|string|min:3|max:255|unique:users,username,' . $this->route('user');
            $rules['email'] = 'sometimes|required|email|max:255|unique:users,email,' . $this->route('user');
            $rules['phone'] = 'nullable|string|max:15';
            $rules['subdomain'] = 'sometimes|required|string|min:4';

        }
       
        // Common rules for both creation and update
        $rules['is_active'] = 'sometimes|boolean';

        // If roles are provided, validate them
        if ($this->has('roles')) {
            $rules['roles'] = 'array';
            $rules['roles.*'] = 'exists:roles,name';  
        }

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
            'database' => strtolower($databasePrefix . Str::slug($this->subdomain, '_')),
            'slug' => Str::slug($this->business_name, '_'),
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
