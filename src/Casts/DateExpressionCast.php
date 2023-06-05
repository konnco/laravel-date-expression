<?php

namespace Konnco\DateExpression\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Database\Eloquent\Model;

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
        return $value;
    }

    /**
     * Prepare the given value for storage.
     *
     * @param  Model  $model
     * @param  mixed  $value
     */
    public function set($model, string $key, $value, array $attributes): mixed
    {
        return \Carbon\Carbon::parse($value);
    }
}
