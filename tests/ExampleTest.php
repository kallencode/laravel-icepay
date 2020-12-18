<?php

namespace Kallencode\Icepay\Tests;

use Illuminate\Support\Str;
use Kallencode\Icepay\Icepay;

class ExampleTest extends TestCase
{
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }

    /** @test */
    public function testYeet()
    {
        $icepay = app(Icepay::class);

        $testPayment = $icepay->checkout([
            'Amount' => 1000,
            'Currency' => 'EUR',
            'Paymentmethod' => 'IDEAL',
            'Issuer' => 'ABNAMRO',
            'Country' => 'NL',
            'Language' => 'NL',
            'Description' => 'This is a example description',
            'OrderID' => (string)Str::uuid(),
            'Reference' => '1',
        ]);

        dump($testPayment);

        $res = $icepay->getPayment($testPayment->PaymentID);


        dump($res);
    }
}
