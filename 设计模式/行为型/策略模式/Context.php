<?php

namespace DesignPatterns\Behavioral\Strategy;

class Context
{
    private $stratege;

    public function __construct(Strategy $s)
    {
        $this->stratege = $s;
    }

    public function ContextInterface()
    {
        $this->stratege->AlgorithmInterface();
    }
}