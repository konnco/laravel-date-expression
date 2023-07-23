<?php

namespace Konnco\DateExpression\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class DateExpressionValidator implements ValidationRule
{
    /**
     * Run the validation rule.
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (! preg_match('/^(?:(\d+[ymowdhs])+|(\d+y)?(\d+mo)?)(\d+w)?(\d+d)?(\d+h)?(\d+m)?(\d+s)?$/', $value)) {
            $fail('The :attribute expression not valid. ex: 1 day 12 hours = 1d12h');
        }
    }
}
