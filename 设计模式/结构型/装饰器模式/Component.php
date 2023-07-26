<?php

namespace DesignPatterns\Structural\Decorator;

interface Component
{
    public function operation();
}

class Face implements Component
{
    public function operation()
    {
        echo "I'm face";
    }
}

abstract class Decorator implements Component {
    protected $component;
    public function __construct(Component $component)
    {
        $this->component = $component;
    }
}

class DecoratorA extends Decorator
{
    public function operation()
    {
        echo $this->component->operation().'Push cream'.PHP_EOL;
    }
}

class DecoratorB extends Decorator
{
    public function operation()
    {
        $this->component->operation();
        $this->addBehavior();
    }

    public function addBehavior()
    {
        echo 'Push 2 cream'.PHP_EOL;
    }
}