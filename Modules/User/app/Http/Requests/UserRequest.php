<?php

namespace Modules\User\Http\Requests;

use Override;
use Illuminate\Validation\Rule;
use PHPUnit\Framework\throwException;
use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Contracts\Validation\ValidatorException;

class UserRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        $requetMethod = $this->getMethod();
        $rules = [];

        if ($requetMethod === 'POST') {
            // Define validation rules for user creation
            $rules['name'] = 'required|string|min:6|max:255';
            $rules['username'] = 'required|string|min:3|max:255|alpha_num|unique:users,username';
            $rules['email'] = 'required|email|max:255|unique:users,email';
            $rules['phone'] = 'nullable|string|max:15';
            $rules['password'] = 'required|string|min:8|confirmed';
        }
        if ($requetMethod === 'PUT' || $requetMethod === 'PATCH') {
            // Define validation rules for user update
            $rules['name'] = 'sometimes|required|string|min:6|max:255';
            // $rules['username'] = 'sometimes|required|string|min:3|max:255|alpha_num|unique:users,username,' . $this->route('user');
            $rules['email'] = 'sometimes|required|email|max:255|unique:users,email,' . $this->route('user');
            $rules['phone'] = 'nullable|string|max:15';
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
        if($this->name) return;
        $this->merge([
            'name' => $this->owner_name,
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
