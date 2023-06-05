<?php

use Konnco\DateExpression\DateExpression;

it('can test', function () {
    $date = DateExpression::parse('1d2h');

    expect($date)->toBe(now()->addDay()->addHours(2));
});
