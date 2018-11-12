<?php

namespace Money;

use PHPUnit\Framework\TestCase;

/**
 * [ ] $5 + 10 CHF = $10 (レートが2:1)
 * [o] $5 * 2 = $10
 * [ ] amountをprivateにする
 * [ ] Moneyの丸め処理どうする?
 * [ ] equals() -> 通過が同じことも確かめる
 * [ ] hasCode() -> ?
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
    public function testEquality() {
        $this->assertTrue((new Dollar(5))->equals(new Dollar(5)));
        $this->assertFalse((new Dollar(5))->equals(new Dollar(6)));
    }
}
