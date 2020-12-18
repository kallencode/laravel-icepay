<?php

namespace Kallencode\Icepay\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Kallencode\Icepay\IcepayFacade;
use Kallencode\Icepay\IcepayServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Kallencode\\Icepay\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            IcepayServiceProvider::class,
        ];
    }

    /**
     * @param \Illuminate\Foundation\Application $app
     *
     * @return array
     */
    protected function getPackageAliases($app)
    {
        return [
            'Icypay' => IcepayFacade::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        // $app['config']->set('database.default', 'sqlite');
        // $app['config']->set('database.connections.sqlite', [
        //     'driver' => 'sqlite',
        //     'database' => ':memory:',
        //     'prefix' => '',
        // ]);

        /*
        include_once __DIR__.'/../database/migrations/create_laravel_icepay_table.php.stub';
        (new \CreatePackageTable())->up();
        */
    }
}
