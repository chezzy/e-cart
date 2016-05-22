<?php

namespace cost;

use App\cost\CalculatorInterface;

class DummyCost implements CalculatorInterface
{
    private $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function getCost($items)
    {
        return $this->value;
    }
}