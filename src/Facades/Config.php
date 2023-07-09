<?php

declare(strict_types=1);

namespace Thuraaung\ConfigTypes\Facades;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Facade;
use Thuraaung\ConfigTypes\ConfigResolver;

/**
 * @method static string|null string(string $key, string|null $default = null)
 * @method static int|null number(string $key, int|null $default = null)
 * @method static float|null float(string $key, float|null $default = null)
 * @method static bool|null boolean(string $key, bool|null $default = null)
 * @method static array|null array(string $key, array|null $default = null)
 * @method static Collection|null collect(string $key, array|null $default = null)
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
