<?php

namespace WireContent;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use WireContent\Commands\InstallCommand;

class WireContentServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('cms-package')
            ->hasViews()
            ->hasMigration('create_migration_table_name_table')
            ->hasCommand(WireContentCommand::class);
    }
}
