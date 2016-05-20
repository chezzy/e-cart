<?php

require_once 'autoload.php';

use App\Cart;
use App\cost\SimpleCost;
use App\storage\SessionStorage;

$storage = new SessionStorage('cart');

$calculator = new SimpleCost();

$cart = new Cart($storage, $calculator);

$cart->add(5, 6, 100);

echo $cart->getCost() . PHP_EOL;