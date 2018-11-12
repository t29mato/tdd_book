<?php

namespace Money;

use PHPUnit\Framework\TestCase;

/**
 * [ ] $5 + 10 CHF = $10 (レートが2:1)
 * [o] $5 * 2 = $10
 * [o] amountをprivateにする
 * [o] Dollarの副作用どうする?
 * [ ] Moneyの丸め処理どうする?
 * [o] equals() -> 通過が同じことも確かめる
 * [ ] hasCode() -> ?
 * [ ] nullと等価性比較
 * [ ] 他のオブジェクトとの等価性比較
 * [o] 5CHF * 2 = 10CHF
 * [ ] DollarとFrancの重複
 * [o] equalsの一般化
 * [ ] timeszの一般化
 * [o] FrancとDollarを比較する
 * [ ] 通過の概念
 */

class MoneyTest extends TestCase
{
    public function testMultiplication() {
        $five = Money::dollar(5);
        $this->assertEquals(Money::dollar(10), $five->times(2));
        $this->assertEquals(Money::dollar(15), $five->times(3));
    }
    public function testEquality() {
        $this->assertTrue((Money::dollar(5))->equals(Money::dollar(5)));
        $this->assertFalse((Money::dollar(5))->equals(Money::dollar(6)));
        $this->assertTrue((Money::franc(5))->equals(Money::franc(5)));
        $this->assertFalse((Money::franc(5))->equals(Money::franc(6)));
        $this->assertFalse((Money::dollar(5))->equals(Money::franc(5)));
    }
    public function testFrancMultiplication() {
        $five = Money::franc(5);
        $this->assertEquals(Money::franc(10), $five->times(2));
        $this->assertEquals(Money::franc(15), $five->times(3));
    }
    public function testCurrency() {
        $this->assertEquals("USD", Money::dollar(1)->currency());
        $this->assertEquals("CHF", Money::franc(1)->currency());
    }
}
