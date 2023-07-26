<?php

namespace DesignPatterns\Behavioral\Memento;

class Caretaker
{
    private $memento;
    public function SetMemento($memento)
    {
        $this->memento = $memento;
    }
    public function GetMemento()
    {
        return $this->memento;
    }
}