<?php
namespace LouisLun\LaravelShippingProvider\Contracts;

interface Provider
{
    /**
     * create package's order
     * @param \LouisLun\LaravelShippingProvider\Contracts\Package $package
     * @return \LouisLun\LaravelShippingProvider\Contracts\Package
     */
    public function createPackage(Package $package);

    /**
     * get package
     *
     * @param string $package_id vendor's package id
     * @return \LouisLun\LaravelShippingProvider\Contracts\Package
     */
    public function getPackage($package_id);

    /**
     * get packages
     *
     * @param string[] $package_ids vendor's package ids
     * @return \LouisLun\LaravelShippingProvider\Contracts\Package[]
     */
    public function getPackages(array $package_ids);
}
