<?php

namespace Konnco\DateExpression\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Database\Eloquent\Model;
use Konnco\DateExpression\DateExpression;

class DateExpressionCast implements CastsAttributes
{
    /**
     * Cast the given value.
     *
     * @param  Model  $model
     * @param  mixed  $value
     */
    public function get($model, string $key, $value, array $attributes): mixed
    {
        return DateExpression::parse($value);
    }

    /**
     * Prepare the given value for storage.
     *
     * @param  Model  $model
     * @param  mixed  $value
     */
    public function set($model, string $key, $value, array $attributes): mixed
    {
        return $value;
    }
}
