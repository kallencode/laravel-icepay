<?php

namespace Kallencode\Icepay;

class IcepayClientFactory
{
    public static function createForConfig(array $config)
    {
        return new IcepayClient(
            $config['api_key'],
            $config['api_secret'],
            $config['completed_url'],
            $config['error_url'],
        );
    }
}
