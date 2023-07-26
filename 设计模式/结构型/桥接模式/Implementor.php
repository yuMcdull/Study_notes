<?php

namespace DesignPatterns\Structural\Bridge;

interface Implementor
{
    public function OperationImp();
}

class ImplementorA implements Implementor
{
    public function OperationImp()
    {
        echo '具体实现A'.PHP_EOL;
    }
}

class ImplementorB implements Implementor
{
    public function OperationImp()
    {
        echo '具体实现B'.PHP_EOL;
    }
}

