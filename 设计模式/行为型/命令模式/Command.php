<?php

namespace DesignPatterns\Behavioral\Command;

abstract class Command
{
    protected $receiver;

    public function __construct(Receiver $receiver)
    {
        $this->receiver = $receiver;
    }

    abstract public function execute();
}

class Command1 extends Command
{
    public function execute()
    {
        $this->receiver->action();
    }
}