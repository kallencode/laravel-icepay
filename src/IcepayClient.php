<?php

namespace Kallencode\Icepay;

use Icepay\API\Client;

class IcepayClient
{

    /** @var Icepay\API\Client */
    private $client;

    public function __construct($apiKey, $apiSecret, $completedUrl, $errorUrl)
    {
        $this->client = new Client();
        $this->client->setApiKey($apiKey);
        $this->client->setApiSecret($apiSecret);
        $this->client->setCompletedUrl($completedUrl);
        $this->client->setErrorUrl($errorUrl);
    }

    public function checkout(array $array)
    {
        return $this->client->payment->checkOut($array);
    }

    public function getPayment($paymentID)
    {
        return $this->client->payment->getPayment([
            'PaymentID' => $paymentID,
        ]);
    }

    public function getClient() : Client
    {
        return $this->client;
    }
}
