<?php

namespace Money;

class Franc extends Money
{
    public function __construct(int $amount, string $currency)
    {
        parent::__construct($amount, $currency);
    }

    public function times(int $multiplier): Franc
    {
        return Money::franc($this->amount * $multiplier);
    }
}
