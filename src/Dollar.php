<?php

namespace Money;

class Dollar
{
    private $amount;
    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function times(int $multiplier): Dollar
    {
        return new Dollar($this->amount * $multiplier);
    }

    public function equals(Dollar $money)
    {
        return $this->amount === $money->amount;
    }
}
