<?php
namespace LouisLun\LaravelShippingProvider\Contracts;

interface Response
{
    public function isSuccessful(): bool;
}