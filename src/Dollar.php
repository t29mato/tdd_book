<?php

namespace Money;

class Dollar extends Money
{
    public function __construct(int $amount, string $currency)
    {
        parent::__construct($amount, $currency);
    }

    public function times(int $multiplier): Dollar
    {
        return Money::dollar($this->amount * $multiplier);
    }
}
