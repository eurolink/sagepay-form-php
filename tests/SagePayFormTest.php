<?php

namespace Eurolink\SagePayForm;

class SetupTest extends \PHPUnit\Framework\TestCase
{
    public function testConstructor()
    {
        $sagePay = new \Eurolink\SagePayForm\Builder([
            'isProduction' => FALSE,
            'encryptPassword' => 1231231231231231,
            'vendor' => 1231231231231231,
        ]);

        $this->assertStringStartsWith('https', $sagePay->getFormEndpoint());

        $this->assertEquals('3.00', $sagePay->getVPSProtocol());

        $this->assertEquals('PAYMENT', $sagePay->getTxType());

        $this->assertStringStartsWith('@', $sagePay->getCrypt());

        $this->assertEquals('1231231231231231', $sagePay->getVendorCode());
    }
}