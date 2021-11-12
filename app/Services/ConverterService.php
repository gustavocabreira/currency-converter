<?php

namespace App\Services;

use App\Factory\CurrencyFactory;
use App\Models\Amount;

class ConverterService
{
    public function __construct(private Amount $amount) {}

    public function convert(string $from, string $to): float
    {
        $factory = new CurrencyFactory();
        $brl = $factory->getCurrency($from)->convertToBRL($this->amount->getAmount());
        $total = $factory->getCurrency($to)->convertFromBRL($brl);
        return $this->format($total);
    }

    private function format(float $amount): float
    {
        return floor($amount * 100) / 100;
    }
}
