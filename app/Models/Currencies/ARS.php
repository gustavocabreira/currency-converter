<?php

namespace App\Models\Currencies;
use App\Interfaces\CurrencyBRLInterface;

class ARS implements CurrencyBRLInterface
{
    private const MULTIPLIER = 0.07;

    public function convertFromBRL(float $amount): float
    {
        return $amount / self::MULTIPLIER;
    }

    public function convertToBRL(float $amount): float
    {
        return $amount * self::MULTIPLIER;
    }
}
