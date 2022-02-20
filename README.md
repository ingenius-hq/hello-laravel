# Hello Laravel
This is a Laravel test package

## Requirements

- PHP version >= 7.3
- Composer

## Installation
Install the package using Composer. The package will automatically register itself.

```bash
composer require ingenius-hq/hello-laravel
```

## Usage Example
Import the package at the top of your file. All of the following examples use the [Facade](https://laravel.com/docs/master/facades).

```php
<?php

use IngeniusHq\HelloLaravel\Facade as Hello;

echo Hello::say("Hello World");
```

## Credits

- [Omar Villafuerte](https://github.com/ovillafuerte94)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.