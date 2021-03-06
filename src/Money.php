<?php

namespace Money;

class Money extends Expression
{
    protected $amount;
    protected $currency;
    public function __construct(int $amount, string $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    public function currency(): string
    {
        return $this->currency;
    }

    public function equals(Money $money)
    {
        return $this->amount === $money->amount
            && $this->currency == $money->currency;
    }

    public function plus(Money $addend): Expression
    {
        return new Expression($this->amount + $addend->amount, $this->currency);
    }

    public function times(int $multiplier): Money
    {
        return new Money($this->amount * $multiplier, $this->currency);
    }

    public static function dollar(int $amount): Money
    {
        return new Money($amount, "USD");
    }

    public static function franc(int $amount): Money
    {
        return new Money($amount, "CHF");
    }
}