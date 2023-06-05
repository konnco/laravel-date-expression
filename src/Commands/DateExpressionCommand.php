<?php

namespace Konnco\DateExpression\Commands;

use Illuminate\Console\Command;

class DateExpressionCommand extends Command
{
    public $signature = 'laravel-date-expression';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
