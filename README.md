# Laravel Config Types

**It supports Laravel 9+ and PHP 8.2+**

## Installation

```bash
composer require thuraaung2493/laravel-config-types:dev-main
```

## Usage

```php

// Facades
use Thuraaung\ConfigTypes\Facades\Config

  Config::string('app.name') // 'Laravel'

// Via Service Container

use Thuraaung\ConfigTypes\ConfigResolver;

class Example
{
  public function __construct(
    private readonly ConfigResolver $config,
  ) {}

  public function test(): string
  {
    return $this->config->string('app.name');
  }
}

$example = new Example();
$example->test() // 'Laravel'
```

## Test

```bash
  composer test
```

## License

This package is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
