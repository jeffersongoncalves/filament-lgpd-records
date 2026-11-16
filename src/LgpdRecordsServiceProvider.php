<?php

namespace JeffersonGoncalves\Filament\LgpdRecords;

use JeffersonGoncalves\FilamentPluginCore\BasePackageServiceProvider;
use Spatie\LaravelPackageTools\Package;

class LgpdRecordsServiceProvider extends BasePackageServiceProvider
{
    public static string $name = 'filament-lgpd-records';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasTranslations();
    }
}
