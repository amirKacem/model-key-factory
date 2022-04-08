<?php

namespace Eloquent\KeyFactory;

use Illuminate\Support\Str;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class KeyFactoryServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('model-key-factory')
            ->hasConfigFile('key-factory');
    }

    public function boot(): void
    {
        parent::boot();

        Str::macro(
            name: 'key',
            macro: fn (string $prefix, int | null $length = null) => KeyFactory::generate(
                prefix: $prefix,
                length: $length,
            ),
        );
    }
}
