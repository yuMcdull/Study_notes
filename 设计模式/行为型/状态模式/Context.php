<?php

namespace DesignPatterns\Behavioral\State;

class Context
{
    private $state;
    public function SetState(State $state)
    {
        $this->state = $state;
    }
    public function Request()
    {
        $this->state = $this->state->Handle();
    }
}