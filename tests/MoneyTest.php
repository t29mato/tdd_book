<?php

namespace Money;

use PHPUnit\Framework\TestCase;

/**
 * [ ] $5 + 10 CHF = $10 (レートが2:1)
 * [o] $5 * 2 = $10
 * [o] amountをprivateにする
 * [ ] Moneyの丸め処理どうする?
 * [o] equals() -> 通過が同じことも確かめる
 * [ ] hasCode() -> ?
 * [ ] nullと等価性比較
 * [ ] 他のオブジェクトとの等価性比較
 * [o] 5CHF * 2 = 10CHF
 * [ ] DollarとFrancの重複
 * [ ] equalsの一般化
 * [ ] timeszの一般化
 */

class MoneyTest extends TestCase
{
    public function testMultiplication() {
        $five = new Dollar(5);
        $this->assertEquals(new Dollar(10), $five->times(2));
        $this->assertEquals(new Dollar(15), $five->times(3));
    }
    public function testEquality() {
        $this->assertTrue((new Dollar(5))->equals(new Dollar(5)));
        $this->assertFalse((new Dollar(5))->equals(new Dollar(6)));
    }
    public function testFrancMultiplication() {
        $five = new Franc(5);
        $this->assertEquals(new Franc(10), $five->times(2));
        $this->assertEquals(new Franc(15), $five->times(3));
    }
}
