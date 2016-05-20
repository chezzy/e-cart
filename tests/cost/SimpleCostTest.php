<?php

namespace tests\storage;

use App\CartItem;
use App\cost\SimpleCost;

class SimpleCostTest extends \PHPUnit_Framework_TestCase
{
    public function testCalculate()
    {
        $calculator = new SimpleCost();
        $this->assertEquals(1000, $calculator->getCost([
            5 => new CartItem(5, 2, 200),
            7 => new CartItem(7, 4, 150),
        ]));
    }
} 