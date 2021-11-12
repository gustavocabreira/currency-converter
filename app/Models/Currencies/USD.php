<?php

namespace App\Models\Currencies;

use App\Interfaces\CurrencyBRLInterface;

class USD implements CurrencyBRLInterface
{
    public function convertFromBRL(float $amount): float
    {
        return $amount / 5.65;
    }

    public function convertToBRL(float $amount): float
    {
        return $amount * 5.65;
    }
}
