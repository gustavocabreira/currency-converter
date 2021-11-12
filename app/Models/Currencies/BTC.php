<?php

namespace App\Models\Currencies;

use App\Interfaces\CurrencyBRLInterface;

class BTC implements CurrencyBRLInterface
{
    private const MULTIPLIER = 10700;

    public function convertFromBRL(float $amount): float
    {
        return (new USD())->convertFromBRL($amount / self::MULTIPLIER);
    }

    public function convertToBRL(float $amount): float
    {
        return (new USD())->convertToBRL($amount * self::MULTIPLIER);
    }
}
