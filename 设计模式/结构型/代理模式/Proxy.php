<?php

namespace DesignPatterns\Structural\Proxy;
require_once "Subject.php";
class Proxy implements Subject
{
    private $realSubject;

    public function __construct()
    {
        $this->realSubject = new RealSubject();
    }

    public function Request()
    {
        echo "代理的操作".PHP_EOL;
        $this->realSubject->Request();
    }
}