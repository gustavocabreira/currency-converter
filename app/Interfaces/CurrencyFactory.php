<?php

namespace App\Interfaces;

interface CurrencyFactory {
    public function getCurrency(string $currency);
}
