<?php

namespace Kallencode\Icepay\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Kallencode\Icepay\Icepay
 */
class Icepay extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-icepay';
    }
}
