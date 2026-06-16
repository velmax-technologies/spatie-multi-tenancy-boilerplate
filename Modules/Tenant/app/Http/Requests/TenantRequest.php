<?php

namespace Modules\Tenant\Http\Requests;

use Illuminate\Support\Str;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

class TenantRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        $requetMethod = $this->getMethod();
        $rules = [];

        if ($requetMethod === 'POST') {
            // validation for store request
            $rules['name'] = 'required|string|min:6|max:255';
            $rules['username'] = 'required|string|min:3|max:255|unique:users,username';
            $rules['email'] = 'required|email|max:255|unique:users,email';
            $rules['phone'] = 'nullable|string|max:15';
            $rules['password'] = 'required|string|min:8|confirmed';
            $rules['domain'] = 'required|string|min:4';
            $rules['database'] = 'required|string|min:4';

        }
        if ($requetMethod === 'PUT' || $requetMethod === 'PATCH') {
            // validation for update request
            $rules['name'] = 'sometimes|required|string|min:6|max:255';
            $rules['username'] = 'sometimes|required|string|min:3|max:255|unique:users,username,' . $this->route('user');
            $rules['email'] = 'sometimes|required|email|max:255|unique:users,email,' . $this->route('user');
            $rules['phone'] = 'nullable|string|max:15';
            $rules['password'] = 'sometimes|required|string|min:8|confirmed';
        }
       
        // Common rules for both creation and update
        $rules['is_active'] = 'sometimes|boolean';

        // If roles are provided, validate them
        if ($this->has('roles')) {
            $rules['roles'] = 'array';
            $rules['roles.*'] = 'exists:roles,name'; // Assuming roles are stored in a 'roles' table
        }

        // Return the validation 
        return $rules;
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'database' => strtolower(config('veltech.tenant_database_prefix') . Str::slug($this->name, '_')),
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
