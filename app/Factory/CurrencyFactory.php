<?php

namespace App\Factory;

use App\Models\Currencies\ARS;
use App\Models\Currencies\BRL;
use App\Models\Currencies\BTC;
use App\Models\Currencies\EUR;
use App\Models\Currencies\GBP;
use App\Models\Currencies\USD;

class CurrencyFactory implements \App\Interfaces\CurrencyFactory
{
    public function getCurrency(string $currency)
    {
        return match ($currency) {
            'ARS' => new ARS(),
            'BRL' => new BRL(),
            'BTC' => new BTC(),
            'EUR' => new EUR(),
            'GBP' => new GBP(),
            'USD' => new USD()
        };
    }
}
