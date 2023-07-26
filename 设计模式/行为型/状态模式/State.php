<?php

namespace DesignPatterns\Behavioral\State;

interface State
{
    public function Handle();
}

class StateA implements State
{
    public function Handle()
    {
        echo '当前状态时A'.PHP_EOL;
        return new StateB();
    }
}

class StateB implements State
{
    public function Handle()
    {
        echo '当前状态时B'.PHP_EOL;
        return new StateA();
    }
}
