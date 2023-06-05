<?php

use Konnco\DateExpression\DateExpression;
use function Pest\Laravel\freezeTime;

it('can test successfully', function () {
    freezeTime();
    $date = DateExpression::parse('1d2h');

    expect($date->toDateTimeString())->toBe(now()->addDay()->addHours(2)->toDateTimeString());
});
