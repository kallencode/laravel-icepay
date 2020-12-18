<?php

namespace Kallencode\Icepay\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Kallencode\Icepay\Icepay
 */
class IcepayFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-icepay';
    }
}
