<?php

require_once 'autoload.php';

use App\Cart;

$storage = new \App\storage\SessionStorage('cart');
$cart = new Cart($storage);

$cart->add(5, 6, 100);

echo $cart->getCost() . PHP_EOL;