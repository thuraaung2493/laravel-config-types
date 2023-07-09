<?php

declare(strict_types=1);

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Config;
use Thuraaung\ConfigTypes\ConfigResolver;

it('can create a config class', function (): void {
    expect(app(ConfigResolver::class))
        ->toBeInstanceOf(ConfigResolver::class);
});

it('should return string value', function (): void {
    /** @var ConfigResolver */
    $config = app(ConfigResolver::class);

    Config::set('app', 'Laravel Config Types');

    expect($config->string('app'))
        ->toBeString();

    expect($config->string('app'))
        ->toBe('Laravel Config Types');
});

it('should return int value', function (): void {
    /** @var ConfigResolver */
    $config = app(ConfigResolver::class);

    Config::set('age', 30);

    expect($config->number('age'))
        ->toBeInt();

    expect($config->number('age'))
        ->toBe(30);
});

it('should return float value', function (): void {
    /** @var ConfigResolver */
    $config = app(ConfigResolver::class);

    Config::set('version', 1.0);

    expect($config->float('version'))
        ->toBeFloat();

    expect($config->float('version'))
        ->toBe(1.0);
});

it('should return boolean value', function (): void {
    /** @var ConfigResolver */
    $config = app(ConfigResolver::class);

    Config::set('is_production', true);

    expect($config->boolean('is_production'))
        ->toBeTrue();

    expect($config->boolean('is_production'))
        ->toBe(true);
});

it('should return array value', function (): void {
    /** @var ConfigResolver */
    $config = app(ConfigResolver::class);

    Config::set('person', ['name' => 'Thura', 'age' => 30]);

    expect($config->array('person'))
        ->toBeArray();

    expect($config->array('person'))
        ->toEqual(['name' => 'Thura', 'age' => 30]);
});

it('should return collection value', function (): void {
    /** @var ConfigResolver */
    $config = app(ConfigResolver::class);

    Config::set('person', ['name' => 'Thura', 'age' => 30]);

    expect($config->collect('person'))
        ->toBeInstanceOf(Collection::class);

    expect($config->collect('person'))
        ->toEqual(collect(['name' => 'Thura', 'age' => 30]));
});
