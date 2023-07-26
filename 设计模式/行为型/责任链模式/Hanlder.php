<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibilities;

abstract class Hanlder
{
    protected $successor;
    public function setSuccessor($successor)
    {
        $this->successor = $successor;
    }
    abstract public function HandleRequest($request);
}

class Hanlder1 extends Hanlder
{
    public function HandleRequest($request)
    {
        if (is_numeric($request)) {
            return '请求参数是数字：' . $request;
        } else {
            return $this->successor->HandleRequest($request);
        }
    }
}

class Hanlder2 extends Hanlder
{
    public function HandleRequest($request)
    {
        if (is_string($request)) {
            return '请求参数是字符串：' . $request;
        } else {
            return $this->successor->HandleRequest($request);
        }
    }
}

class Hanlder3 extends Hanlder
{
    public function HandleRequest($request)
    {
        return '我也不知道请求参数是啥了，你猜猜？' . gettype($request);
    }
}
