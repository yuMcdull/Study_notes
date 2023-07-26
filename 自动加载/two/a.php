<?php
namespace app\two;

class A
{
    // 对象实例化时输出当前类名
    function __construct()
    {
        echo 'two/' . __CLASS__;
        echo "\r\n";
    }
}