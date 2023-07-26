<?php

namespace app\library;

class Cache
{
    public $store = [];
    public function __construct()
    {

    }

    public function set($key,$value)
    {
        $this->store[$key] = $value;
    }

    public function get($key)
    {
        return $this->store[$key];
    }
}