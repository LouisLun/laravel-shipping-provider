<?php
namespace LouisLun\LaravelShippingProvider\Contracts;

interface Package
{
    /**
     * get vendor's package id
     *
     * @return string
     */
    public function getVendorPackageId();

    /**
     * get package id
     *
     * @return string
     */
    public function getPackageId();

    /**
     * get pacakge status
     *
     * @return mixed
     */
    public function status();
}
