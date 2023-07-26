<?php

namespace DesignPatterns\Structural\Bridge;

abstract class Abstraction
{
    protected $imp;

    public function SetImplementor(Implementor $imp)
    {
        $this->imp = $imp;
    }
    abstract public function Operation();
}

class RefinedAbstraction extends Abstraction
{
    public function Operation()
    {
        echo '附加操作'.PHP_EOL;
       $this->imp->OperationImp();
    }
}