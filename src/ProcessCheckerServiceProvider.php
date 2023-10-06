<?php

namespace Elminson\ProcessChecker;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Elminson\ProcessChecker\Commands\ProcessCheckerCommand;

class ProcessCheckerServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('process-checker')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_process_checker_table')
            ->hasCommand(ProcessCheckerCommand::class);
    }
}
