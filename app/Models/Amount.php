<?php

namespace App\Models;

class Amount
{
    public function __construct(private float $amount){}

    public function getAmount(): float
    {
        return $this->amount;
    }
}
