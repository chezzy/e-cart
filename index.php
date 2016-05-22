<?php

require_once 'autoload.php';

use App\Cart;
use App\cost\SimpleCost;
use App\storage\SessionStorage;
use App\cost\BirthdayCost;

$storage = new SessionStorage('cart');

$calculator = new SimpleCost();
$calculator = new BirthdayCost($calculator, 10, date('Y-m-d'), date('Y-m-d'));

$cart = new Cart($storage, $calculator);

$cart->add(5, 1, 100);

echo $cart->getCost() . PHP_EOL;