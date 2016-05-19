<?php

namespace App;

class Cart
{
    private $items = [];

    public function __construct()
    {
        $this->loadItems();
    }

    public function getItems()
    {
        return $this->items;
    }

    public function add($id, $count, $price)
    {
        $current = isset($this->items[$id]) ? $this->items[$id]->getCount() : 0;
        $this->items[$id] = new CartItem($id, $current + $count, $price);
        $this->saveItems();
    }

    public function remove($id)
    {
        if (array_key_exists($id, $this->items)) {
            unset($this->items[$id]);
        }
        $this->saveItems();
    }

    public function clear()
    {
        $this->items = [];
        $this->saveItems();
    }

    public function getCost()
    {
        $cost = 0;
        foreach ($this->items as $item) {
            $cost += $item->getCost();
        }
        return $cost;
    }

    protected function loadItems()
    {
        $this->items = (isset($_SESSION['cart'])) ? unserialize($_SESSION['cart']) : [];
    }

    protected function saveItems()
    {
        $_SESSION['cart'] = serialize($this->items);
    }
}
