<?php

namespace Money;

abstract class Money
{
    protected $amount;
    protected $currency;
    public function __construct(int $amount, string $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    abstract function times(int $multiplier);
    public function currency(): string
    {
        return $this->currency;
    }

    public function equals(Money $money)
    {
        return $this->amount === $money->amount
            && get_class($this) == get_class($money);
    }

    public static function dollar(int $amount): Money
    {
        return new Dollar($amount, "USD");
    }

    public static function franc(int $amount): Money
    {
        return new Franc($amount, "CHF");
    }
}