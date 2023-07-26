<?php

namespace DesignPatterns\Creational\Prototype;
require_once "BookPrototype.php";
class FooBookPrototype extends BookPrototype
{

    protected $category = 'foo';

    public function __clone()
    {
    }
}