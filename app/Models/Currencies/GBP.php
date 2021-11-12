<?php

namespace App\Models\Currencies;

use App\Interfaces\CurrencyBRLInterface;
use App\Models\Amount;

class GBP implements CurrencyBRLInterface
{
    public function convertFromBRL(float $amount): float
    {
        return $amount / 7.24;
    }

    public function convertToBRL(float $amount): float
    {
        return $amount * 7.24;
    }
}
