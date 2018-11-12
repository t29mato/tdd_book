<?php

namespace Money;

use PHPUnit\Framework\TestCase;

/**
 * [ ] $5 + 10 CHF = $10 (レートが2:1)
 * [ ] $5 * 2 = $10
 */

class MoneyTest extends TestCase
{
    public function testMultiplication() {
        $five = new Dollar(5);
        $five->times(2);
        $this->assertEquals(10, $five->amount);
    }
}
