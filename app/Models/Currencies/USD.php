<?php

namespace App\Models\Currencies;

use App\Interfaces\CurrencyBRLInterface;

class USD implements CurrencyBRLInterface
{
    public function convertFromBRL(float $amount): float
    {
        return round($amount / 5.65, 2);
    }

    public function convertToBRL(float $amount): float
    {
        return round($amount * 5.65, 2);
    }
}
