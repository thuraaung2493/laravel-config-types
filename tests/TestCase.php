<?php

declare(strict_types=1);

namespace Thuraaung\ConfigTypes\Tests;

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Facade;
use Orchestra\Testbench\TestCase as BaseTestCase;
use Thuraaung\ConfigTypes\ConfigTypesServiceProvider;
use Thuraaung\ConfigTypes\Facades\Config;

final class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app): array
    {
        return [
            ConfigTypesServiceProvider::class,
        ];
    }

    /**
     * @param Application $app
     * @return array<string,class-string<Facade>>
     */
    protected function getPackageAliases($app): array
    {
        return [
            'ConfigResolver' => Config::class,
        ];
    }
}
