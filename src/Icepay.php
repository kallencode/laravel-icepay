<?php

namespace Kallencode\Icepay;

class Icepay
{

    /** @var IcepayClient */
    private $client;

    public function __construct(IcepayClient $client)
    {
        $this->client = $client;
    }

    /**
     *
     * {#348
          +"Amount": 1000
          +"Country": "NL"
          +"Currency": "EUR"
          +"Description": "This is a example description"
          +"EndUserIP": "false"
          +"Issuer": "ABNAMRO"
          +"Language": "NL"
          +"OrderID": "b2436aea-f"
          +"PaymentID": 123123123
          +"PaymentMethod": "IDEAL"
          +"PaymentScreenURL": "https://testmode.icepay.com/payment/start/123123/123123123/IDEAL/ABNAMRO/NL/NL/EUR/1000"
          +"ProviderTransactionID": "123123123"
          +"Reference": "1"
          +"TestMode": true
          +"URLCompleted": "http://example.com/payment.php"
          +"URLError": "http://example.com/payment.php"
          +"MerchantID": 123123
          +"Checksum": "82275e3dce8c7a920c1a1d801ea77d62ca4ba543"
         }
     *
     * @param  array  $payload
     * @return object
     */
    public function checkout(array $payload)
    {
        return $this->client->checkOut($payload);
    }

    /**
     *
     {#375
      +"PaymentID": 123123123
      +"Amount": 1000
      +"Currency": "EUR"
      +"Description": "This is a example description"
      +"Duration": 0
      +"ConsumerName": ""
      +"ConsumerAccountNumber": ""
      +"ConsumerAddress": ""
      +"ConsumerHouseNumber": ""
      +"ConsumerCity": ""
      +"ConsumerCountry": ""
      +"ConsumerEmail": ""
      +"ConsumerPhoneNumber": ""
      +"ConsumerIPAddress": ""
      +"Issuer": "ABNAMRO"
      +"OrderID": "b2436aea-f"
      +"OrderTime": "2020-12-18T16:13:32.890Z"
      +"PaymentMethod": "IDEAL"
      +"PaymentTime": ""
      +"Reference": "1"
      +"Status": "OPEN"
      +"StatusCode": ""
      +"TestMode": true
      +"ConsumerBIC": ""
      +"Attributes": {#378}
      +"MerchantID": 123123
      +"Checksum": "df790b423c1275d3adc80ea00e4dbc3f68f7ee3d"
      +"Timestamp": "2020-12-18T16:13:33.405Z"
    }
     * @param  int|string $paymentID
     * @return object
     */
    public function getPayment($paymentID)
    {
        return $this->client->getPayment($paymentID);
    }
}
