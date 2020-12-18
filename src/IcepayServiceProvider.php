<?php

namespace Kallencode\Icepay;

use Illuminate\Support\ServiceProvider;
use InvalidArgumentException;

class IcepayServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/laravel-icepay.php' => config_path('laravel-icepay.php'),
            ], 'config');
        }
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/laravel-icepay.php', 'laravel-icepay');


        $config = config('laravel-icepay');


        $this->app->bind(IcepayClient::class, function () use ($config) {
            return IcepayClientFactory::createForConfig($config);
        });

        $this->app->bind(Icepay::class, function () use ($config) {
            $this->guardAgainstInvalidConfig($config);
            $client = app(IcepayClient::class);


            return new Icepay($client);
        });

        $this->app->alias(Icepay::class, 'laravel-icepay');
    }

    public function guardAgainstInvalidConfig($config)
    {
        if (empty($config['api_key'])) {
            throw new InvalidArgumentException("Invalid config, api key not found");
        }
        if (empty($config['api_secret'])) {
            throw new InvalidArgumentException("Invalid config, api secret not found");
        }
    }
}
