# [JSON Unicode Pretty Print Formatter for Monolog](https://github.com/tatocaster/monolog-json-unicode-pretty-formatter)

The extension of `JsonFormatter` of [Monolog](https://github.com/Seldaek/monolog), which pretty prints json and supports unicode. Does not escape slashes.
extended from `JsonFormatter` , so it is fully compatible with parent.

## Requirements
### Required

* [PHP] 5.4.0+


## Examples

```php
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Tatocaster\Monolog\Formatter\JsonPrettyUnicodePrintFormatter;

$logger = new Logger('MyLogger');
$handler = new StreamHandler('/var/log/mylogger.log', Logger::INFO);
$handler->setFormatter(new JsonPrettyUnicodePrintFormatter());
$logger->pushHandler($handler);
```


## Installation

### with composer

```json
{
    "require": {
        "tatocaster/monolog-json-unicode-pretty-formatter": ">=1.0"
    }
}
```

## Pull Requests are welcome


##### Copyright (c) 2017 [Tato Kutalia](https://tatocaster.me).

Licensed for use under the terms of the [MIT] license.