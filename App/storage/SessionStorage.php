<?php

namespace App\storage;


use App\CartItem;

class SessionStorage implements StorageInterface
{
    private $key;

    public function __construct($key)
    {
        $this->key = $key;
    }

    public function load()
    {
        return isset($_SESSION[$this->key]) ? unserialize($_SESSION[$this->key]) : [];
    }

    public function save($items)
    {
        $_SESSION[$this->key] = serialize($items);
    }
}