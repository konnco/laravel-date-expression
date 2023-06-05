<?php

namespace Konnco\DateExpression\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Konnco\DateExpression\DateExpression
 */
class DateExpression extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Konnco\DateExpression\DateExpression::class;
    }
}
