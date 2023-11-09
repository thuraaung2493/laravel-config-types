<?php

declare(strict_types=1);

namespace Thuraaung\ConfigTypes;

use Illuminate\Contracts\Config\Repository;
use Illuminate\Support\Collection;

final readonly class ConfigResolver
{
    public function __construct(
        private Repository $config
    ) {
    }

    public function string(string $key, string|null $default = null): string
    {
        return (string) $this->config->get(
            key: $key,
            default: $default,
        );
    }

    public function number(string $key, int|null $default = null): int
    {
        return (int) $this->config->get(
            key: $key,
            default: $default,
        );
    }

    public function float(string $key, float|null $default = null): float
    {
        return (float) $this->config->get(
            key: $key,
            default: $default,
        );
    }

    public function boolean(string $key, bool|null $default = null): bool
    {
        return (bool) $this->config->get(
            key: $key,
            default: $default,
        );
    }

    public function array(string $key, array|null $default = null): array
    {
        return (array) $this->config->get(
            key: $key,
            default: $default,
        );
    }

    public function collect(string $key, array|null $default = null): Collection
    {
        return Collection::make(
            items: (array) $this->config->get(
                key: $key,
                default: $default,
            ),
        );
    }
}
