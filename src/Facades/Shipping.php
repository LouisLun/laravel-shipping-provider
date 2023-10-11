<?php
namespace LouisLun\LaravelShippingProvider\Facades;

class Shipping
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return \LouisLun\LaravelShippingProvider\ShippingManager::class;
    }
}
