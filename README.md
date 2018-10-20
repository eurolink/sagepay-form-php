# A simple package to integrate SagePay Form v3.00 into your website.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/eurolink/sagepay-form-php.svg?style=flat-square)](https://packagist.org/packages/eurolink/sagepay-form-php)
[![Build Status](https://img.shields.io/travis/eurolink/sagepay-form-php/master.svg?style=flat-square)](https://travis-ci.org/eurolink/sagepay-form-php)
[![Quality Score](https://img.shields.io/scrutinizer/g/eurolink/sagepay-form-php.svg?style=flat-square)](https://scrutinizer-ci.com/g/eurolink/sagepay-form-php)
[![Total Downloads](https://img.shields.io/packagist/dt/eurolink/sagepay-form-php.svg?style=flat-square)](https://packagist.org/packages/eurolink/sagepay-form-php)

## Installation

You can install the package via composer:

```bash
composer require eurolink/sagepay-form-php
```

## Usage

``` php
$sagePay = new Eurolink\SagePayForm();
echo $sagePay->echoPhrase('Hello, Eurolink!');
```

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.