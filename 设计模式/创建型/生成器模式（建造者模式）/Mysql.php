<?php

namespace DesignPatterns\Creational\Builder;
require_once "abDb.php";
class Mysql extends Db
{
    protected $data;
    public function setParams($param)
    {
        echo "设置mysql参数:{$param}\r\n";
        $this->data[] = $param;
    }
}