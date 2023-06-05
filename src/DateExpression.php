<?php

namespace Konnco\DateExpression;

class DateExpression
{
    public static function parse($expression)
    {
        $carbonDate = now();

        // Extract the time intervals from the expression
        $pattern = '/(\d+[a-z]+)/i';
        preg_match_all($pattern, $expression, $matches);

        $intervals = $matches[0];

        // Define mapping for interval units
        $unitMap = [
            'y' => 'years',
            'mo' => 'months',
            'w' => 'weeks',
            'd' => 'days',
            'h' => 'hours',
            'm' => 'minutes',
            's' => 'seconds',
        ];

        // Process each interval
        foreach ($intervals as $interval) {
            $amount = (int) filter_var($interval, FILTER_SANITIZE_NUMBER_INT);
            $unit = str_replace($amount, '', $interval);

            // Check if unit is valid
            if (isset($unitMap[$unit])) {
                $carbonDate->add($amount, $unitMap[$unit]);
            }
        }

        return $carbonDate;
    }
}
