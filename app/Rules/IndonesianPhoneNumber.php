<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class IndonesianPhoneNumber implements ValidationRule
{
    /**
     * Run the validation rule.
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        // Bersihkan input dari spasi, tanda minus, dan karakter non-digit (kecuali +)
        $cleanValue = preg_replace('/[\s\-\(\)]/', '', $value);

        // Pattern untuk nomor HP Indonesia yang lebih fleksibel
        $pattern = '/^(\+62|62|0)8[1-9][0-9]{6,13}$/';

        if (!preg_match($pattern, $cleanValue)) {
            $fail('Nomor HP harus berupa nomor Indonesia yang valid. Format: 081234567890, +6281234567890, atau 6281234567890.');
        }
    }
}
