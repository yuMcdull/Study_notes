<?php

namespace DesignPatterns\Behavioral\Mediator;
// 同事类
abstract class Colleague
{
    protected $mediator;
    public function __construct(Mediator $mediator)
    {
        $this->mediator = $mediator;
    }

}

class Colleague1 extends Colleague
{
    public function Send(String $message)
    {
        $this->mediator->Send($message, $this);
    }
    public function Notify(String $message)
    {
        echo "同事1得到信息：" . $message, PHP_EOL;
    }
}

class Colleague2 extends Colleague
{
    public function Send(String $message)
    {
        $this->mediator->Send($message, $this);
    }
    public function Notify(String $message)
    {
        echo "同事2得到信息：" . $message;
    }
}