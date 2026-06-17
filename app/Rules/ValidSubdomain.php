<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Translation\PotentiallyTranslatedString;

class ValidSubdomain implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  Closure(string, ?string=): PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (! preg_match('/^(?!-)[a-z0-9-]+(?<!-)$/', $value)) {
            $fail('The :attribute must be a valid subdomain.');
            return;
        }

        $reserved = [
            'www',
            'admin',
            'api',
            'mail',
            'ftp',
            'test',
        ];

        if (in_array(strtolower($value), $reserved)) {
            $fail('The :attribute is reserved and cannot be used.');
        }
    }
}
