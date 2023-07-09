<?php

declare(strict_types=1);

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Config as DefaultConfig;
use Thuraaung\ConfigTypes\Facades\Config;

it('should return string value', function (): void {
    DefaultConfig::set('app', 'Laravel Config Types');

    expect(Config::string('app'))
        ->toBeString();

    expect(Config::string('app'))
        ->toBe('Laravel Config Types');
});

it('should return int value', function (): void {
    DefaultConfig::set('age', 30);

    expect(Config::number('age'))
        ->toBeInt();

    expect(Config::number('age'))
        ->toBe(30);
});

it('should return float value', function (): void {
    DefaultConfig::set('version', 1.0);

    expect(Config::float('version'))
        ->toBeFloat();

    expect(Config::float('version'))
        ->toBe(1.0);
});

it('should return boolean value', function (): void {
    DefaultConfig::set('is_production', true);

    expect(Config::boolean('is_production'))
        ->toBeTrue();

    expect(Config::boolean('is_production'))
        ->toBe(true);
});

it('should return array value', function (): void {
    DefaultConfig::set('person', ['name' => 'Thura', 'age' => 30]);

    expect(Config::array('person'))
        ->toBeArray();

    expect(Config::array('person'))
        ->toEqual(['name' => 'Thura', 'age' => 30]);
});

it('should return collection value', function (): void {
    DefaultConfig::set('person', ['name' => 'Thura', 'age' => 30]);

    expect(Config::collect('person'))
        ->toBeInstanceOf(Collection::class);

    expect(Config::collect('person'))
        ->toEqual(collect(['name' => 'Thura', 'age' => 30]));
});
