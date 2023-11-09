<?php

declare(strict_types=1);

namespace Thuraaung\ConfigTypes\Facades;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Facade;
use Thuraaung\ConfigTypes\ConfigResolver;

/**
 * @method static string string(string $key, string|null $default = null)
 * @method static int number(string $key, int|null $default = null)
 * @method static float float(string $key, float|null $default = null)
 * @method static bool boolean(string $key, bool|null $default = null)
 * @method static array array(string $key, array|null $default = null)
 * @method static Collection collect(string $key, array|null $default = null)
 */
final class Config extends Facade
{
    /**
     * @return class-string
     */
    protected static function getFacadeAccessor(): string
    {
        return ConfigResolver::class;
    }
}
