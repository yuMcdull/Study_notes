<?php

namespace DesignPatterns\Creational\Builder;
require_once "BuilderInterface.php";
require_once "Mysql.php";
class MysqlBuilder implements Builder
{
    protected $DB;
    //设置账户名
    public function SetName($param)
    {
        $this->DB->setParams($param);
    }
    //设置密码
    public function SetPass($param)
    {
        $this->DB->setParams($param);
    }
    //设置端口
    public function SetPort($param)
    {
        $this->DB->setParams($param);
    }
    public function CreateDB()
    {
       $this->DB = new Mysql();
    }
    public function GetDB()
    {
        return $this->DB;
    }
}