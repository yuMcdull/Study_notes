<?php

namespace DesignPatterns\Creational\FactoryMethod;

abstract class FactoryMethod
{
    abstract protected function createObj();

    public function getObj(){
        return $this->createObj();
    }
}