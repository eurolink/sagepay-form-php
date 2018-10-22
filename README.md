# Integrate SagePay Form v3.00 into your PHP website.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/eurolink/sagepay-form-php.svg?style=flat-square)](https://packagist.org/packages/eurolink/sagepay-form-php)
[![Total Downloads](https://img.shields.io/packagist/dt/eurolink/sagepay-form-php.svg?style=flat-square)](https://packagist.org/packages/eurolink/sagepay-form-php)

## Installation

You can install the package via composer:

```bash
composer require eurolink/sagepay-form-php
```

## Usage

#### Outgoing

``` php
$sagePay = new \Eurolink\SagePayForm\Builder([
    'isProduction' => FALSE,
    'encryptPassword' => 'XXXXXXXXXXXXXXXX',
    'vendor' => 'ZZZZZZZZZZZZZZZZ',
]);

$sagePay->setVendorTxCode( rand( 0, 32000 ) * rand( 0, 32000 ) );
$sagePay->setCurrency( 'GBP' );
$sagePay->setAmount( 100 );
$sagePay->setDescription('Payment' );
$sagePay->setSendEMail( 1 );
$sagePay->setBillingSurname( 'Smith' );
$sagePay->setBillingFirstnames( 'John' );
$sagePay->setBillingCity( 'London' );
$sagePay->setBillingPostCode( 'LN1 ON' );
$sagePay->setBillingAddress1( '1 An Other Road' );
$sagePay->setCustomerEMail( 'user@example.com' );
$sagePay->setCustomerName( 'John Smith' );
$sagePay->setBillingCountry( 'GB' );
$sagePay->setDeliverySameAsBilling();
$sagePay->setSuccessURL( 'http://example.com/sage?outcome=success' );
$sagePay->setFailureURL( 'http://example.com/sage?outcome=failure' );
```

``` php
<form method="POST" action="<?php echo $sagePay->getFormEndpoint(); ?>">
    <input type="hidden" name="VPSProtocol" value="<?php echo $sagePay->getVPSProtocol(); ?>">
    <input type="hidden" name="TxType" value="<?php echo $sagePay->getTxType(); ?>">
    <input type="hidden" name="Vendor" value="<?php echo $sagePay->getVendorCode(); ?>">
    <input type="hidden" name="Crypt" value="<?php echo $sagePay->getCrypt(); ?>">
    <button type="submit">Pay with SagePay</button>
</form>
```

#### Incoming

``` php
$sagePay = new \Eurolink\SagePayForm\Builder([
    'isProduction' => FALSE,
    'encryptPassword' => 'XXXXXXXXXXXXXXXX',
    'vendor' => 'ZZZZZZZZZZZZZZZZ',
]);

$sagePay->decode( $_GET['crypt'] );

// has response been successfully decrypted
var_dump( $sagePay->isResponseValid() );

// is response successful?
var_dump( $sagePay->isResponseStatusOK() );

// return the success or error message
var_dump( $sagePay->getResponseStatusMessage() );

// return vendor code (as previously submitted)
var_dump( $sagePay->getResponseVendorCode() );

// return transaction ID
var_dump( $sagePay->getResponseVendorCode() );

// return transaction ID (excluding curly brackets)
var_dump( $sagePay->getResponseTransactionIDFormatted() );
```

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Credit
Credit goes to [tolzhabayev](https://github.com/tolzhabayev) for the [initial PHP class](https://github.com/tolzhabayev/sagepayForm-php).

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.