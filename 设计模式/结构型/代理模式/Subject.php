<?php

namespace DesignPatterns\Structural\Proxy;

interface Subject
{
    public function Request();
}

class RealSubject implements Subject
{
    public function Request()
    {
        echo "实际操作".PHP_EOL;
    }
}