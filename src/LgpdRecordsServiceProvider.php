<?php

namespace JeffersonGoncalves\Filament\LgpdRecords;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LgpdRecordsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-lgpd-records')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigrations();
    }
}
