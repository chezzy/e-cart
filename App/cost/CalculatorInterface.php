<?php

namespace App\cost;

use App\CartItem;

interface CalculatorInterface
{
    /**
     * @param CartItem[] $items
     * @return float
     */
    public function getCost($items);
} 