<?php

namespace DesignPatterns\Behavioral\Command;

class Invoker
{
    public $command;

    public function __construct($command)
    {
        $this->command = $command;
    }

    public function exec()
    {
        $this->command->execute();
    }
}