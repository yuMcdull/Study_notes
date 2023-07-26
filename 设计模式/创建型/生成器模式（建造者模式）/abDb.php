<?php

namespace DesignPatterns\Creational\Builder;

abstract class Db
{
    protected $data;
    abstract public function setParams($param);
}