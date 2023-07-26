<?php

namespace DesignPatterns\Behavioral\Observer;

interface Observer
{
    public function update(Order $order);
}

class Goods implements Observer
{
    public function update(Order $order)
    {
        echo '修改商品'.$order->goodsId ."的库存\r\n";
    }
}

class Message implements Observer
{
    public function update(Order $order)
    {
        echo '发送短信'.$order->mobile.":准备发货\r\n" ;
    }
}