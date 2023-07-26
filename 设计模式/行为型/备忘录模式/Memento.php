<?php

namespace DesignPatterns\Behavioral\Memento;

class Memento
{
    private $state;

    public function SetState($state)
    {
        $this->state = $state;
    }
    public function GetState()
    {
        return $this->state;
    }
}