<?php

namespace DesignPatterns\Behavioral\TemplateMethod;

abstract class Template
{
    final public function life()
    {
        $this->eat();
        $this->sleep();
        $this->play();
    }

    abstract public function eat();
    abstract public function sleep();
    abstract public function play();
}

class PeopleA extends Template
{

    public function eat()
    {
        echo "吃饭\r\n";
    }

    public function sleep()
    {
        echo "睡觉\r\n";
    }

    public function play()
    {
        echo "打豆豆\r\n";
    }
}