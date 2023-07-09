<?php

declare(strict_types=1);

namespace Thuraaung\ConfigTypes;

use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

final class ConfigTypesServiceProvider extends ServiceProvider implements DeferrableProvider
{
    public function provides(): array
    {
        return [
            ConfigResolver::class,
        ];
    }

    public function register(): void
    {
        $this->app->singleton(
            abstract: ConfigResolver::class,
            concrete: ConfigResolver::class,
        );
    }
}
