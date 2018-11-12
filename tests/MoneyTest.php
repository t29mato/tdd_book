<?php

namespace Money;

use PHPUnit\Framework\TestCase;

/**
 * [ ] $5 + 10 CHF = $10 (レートが2:1)
 * [o] $5 * 2 = $10
 * [ ] amountをprivateにする
 * [ ] Dollarの副作用どう進める
 * [ ] Moneyの丸め処理どうする?
 */

class MoneyTest extends TestCase
{
    public function testMultiplication() {
        $five = new Dollar(5);
        $product = $five->times(2);
        $this->assertEquals(10, $product->amount);
        $product = $five->times(3);
        $this->assertEquals(15, $product->amount);
    }
}
