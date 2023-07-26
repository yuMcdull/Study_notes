<?php
namespace app\one\oneone;
class AA
{
// 对象实例化时输出当前类名
    function __construct()
    {
        echo 'one/' . __CLASS__;
        echo "\r\n";
    }
}