<?php

namespace Konnco\DateExpression;

use Konnco\DateExpression\Commands\DateExpressionCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class DateExpressionServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-date-expression')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-date-expression_table')
            ->hasCommand(DateExpressionCommand::class);
    }
}
