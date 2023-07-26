<?php

namespace DesignPatterns\Creational\Prototype;
require_once "BookPrototype.php";
class BarBookPrototype extends BookPrototype
{

    protected $category = "bar";

    public function __clone()
    {

    }
}