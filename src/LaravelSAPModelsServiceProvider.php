<?php

namespace Alixcan\LaravelSAPModels;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Alixcan\LaravelSAPModels\Commands\LaravelSAPModelsCommand;

class LaravelSAPModelsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravelsapmodels')
            ->hasConfigFile()
            ->hasCommand(LaravelSAPModelsCommand::class);
    }
}
