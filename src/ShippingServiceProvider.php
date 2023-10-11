<?php
namespace LouisLun\LaravelShippingProvider;

use Illuminate\Support\ServiceProvider;

class ShippingServiceProvider extends ServiceProvider
{
    /**
     * Register services
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(ShippingManager::class, function ($app) {
            return new ShippingManager($app);
        });
    }

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/config.php' => config_path('shipping.php'),
        ], 'shipping');
    }
}
