<?php

namespace DesignPatterns\Behavioral\Observer;

class Order
{
    public $goodsId;
    public $mobile;

    private $observers = [];

    public function attach($obj)
    {
        $this->observers[] = $obj;
    }

    public function detach($obj)
    {
        $position = 0;
        foreach ($this->observers as $observer)
        {
            if ($observer == $obj)
            {
                array_splice($this->observers, ($position), 1);
                break;
            }
            ++$position;
        }
    }

    public function notify()
    {
        foreach ($this->observers as $observer)
        {
            $observer->update($this);
        }
    }

    public function pay($goodId,$mobile)
    {
        $this->goodsId = $goodId;
        $this->mobile = $mobile;
    }
}