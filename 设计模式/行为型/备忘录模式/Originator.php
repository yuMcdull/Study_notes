<?php

namespace DesignPatterns\Behavioral\Memento;
require_once "Memento.php";
class Originator
{
    private $state;

    public function SetMeneto(Memento $m)
    {
        $this->state = $m->GetState();
    }
    public function CreateMemento()
    {
        $m = new Memento();
        $m->SetState($this->state);
        return $m;
    }

    public function SetState($state)
    {
        $this->state = $state;
    }

    public function ShowState()
    {
        echo $this->state, PHP_EOL;
    }
}