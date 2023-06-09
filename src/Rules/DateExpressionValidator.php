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
        if (preg_match('/^\S.*\s.*\S$/', $value)) {
            $fail('The :attribute cannot contain spaces.');

            return;
        }

        $pattern = '/(\d+[a-z]+)/i';
        preg_match_all($pattern, $value, $matches);

        $intervals = $matches[0];

        foreach ($intervals as $interval) {
            $amount = (int) filter_var($interval, FILTER_SANITIZE_NUMBER_INT);
            $unit = str_replace($amount, '', $interval);

            // Check if unit is valid
            if (! in_array($unit, ['y', 'mo', 'w', 'd', 'h', 'm', 's'])) {
                $fail("The :attribute must contain 'y', 'mo', 'd', 'h', 'm', or 's' only.");
            }
        }
    }
}
