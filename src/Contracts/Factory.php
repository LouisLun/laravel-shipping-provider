<?php
namespace LouisLun\LaravelShippingProvider\Contracts;

interface Factory
{
    /**
     * Get an shipping provider implementation.
     *
     * @param  string  $driver
     * @return \LouisLun\LaravelShippingProvider\Contracts\Provider
     */
    public function driver($driver = null);
}
