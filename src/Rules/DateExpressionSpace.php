<?php
 
namespace Konnco\DateExpression\Rules;
 
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
 
class DateExpressionSpace implements ValidationRule
{
    /**
     * Run the validation rule.
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (preg_match('/^\S.*\s.*\S$/', $value)) {
            $fail("The :attribute cannot contain spaces.");
        }
    }
}