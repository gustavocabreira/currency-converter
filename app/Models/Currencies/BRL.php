<?php

namespace App\Models\Currencies;

use App\Interfaces\CurrencyBRLInterface;

class BRL implements CurrencyBRLInterface
{
    public function convertFromBRL(float $amount): float
    {
        return $amount;
    }

    public function convertToBRL(float $amount): float
    {
        return $amount;
    }
}
