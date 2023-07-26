<?php

namespace DesignPatterns\Creational\Builder;
require_once "BuilderInterface.php";
require_once "Oracle.php";
class OracleBuilder implements Builder
{
    protected $DB;

    public function CreateDB()
    {
        $this->DB = new Oracle();
    }

    public function GetDB()
    {
        return $this->DB;
    }

    public function SetName($param)
    {
        $this->DB->setParams($param);
    }

    public function SetPass($param)
    {
        $this->DB->setParams($param);
    }

    public function SetPort($param)
    {
        $this->DB->setParams($param);
    }
}