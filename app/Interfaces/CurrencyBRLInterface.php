<?php

namespace App\Interfaces;

interface CurrencyBRLInterface
{
    public function convertFromBRL(float $amount): float;
    public function convertToBRL(float $amount): float;
}
