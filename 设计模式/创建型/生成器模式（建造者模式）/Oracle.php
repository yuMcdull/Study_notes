<?php

namespace DesignPatterns\Creational\Builder;
require_once "abDb.php";
class Oracle extends DB
{
    protected $data;
    function setParams($param)
    {
        echo "设置Oracle参数:{$param}\r\n";
        $this->data[] = $param;
    }
}