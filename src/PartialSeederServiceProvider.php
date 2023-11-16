<?php

namespace Hydrat\PartialSeeder;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Hydrat\PartialSeeder\Commands;

class PartialSeederServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('partial-seeder')
            ->hasConfigFile()
            ->hasMigration('create_partial_seeder_table')
            ->hasCommands([
                Commands\PartialSeederMakeCommand::class,
                Commands\PartialSeederSeedCommand::class,
                Commands\PartialSeederStatusCommand::class,
            ]);
    }
}
