<?php

namespace App\Models\Currencies;

use App\Interfaces\CurrencyBRLInterface;

class EUR implements CurrencyBRLInterface
{
    private const MULTIPLIER = 1.18;

    public function convertFromBRL(float $amount): float
    {
        $USD = new USD();
        return $USD->convertFromBRL($amount / self::MULTIPLIER);
    }

    public function convertToBRL(float $amount): float
    {
        $USD = new USD();
        return $USD->convertToBRL($amount * self::MULTIPLIER);
    }
}
