<?php

namespace DesignPatterns\Creational\AbstractFactory;
require_once "operateInterface.php";

class ClassicMysqlDB implements DBOperate
{
    public function Insert()
    {
        echo "ClassicMysqlDB Insert \r\n";
    }
}

class GoldenMysqlDB implements DBOperate
{
    public function Insert()
    {
        echo "GoldenMysqlDB Insert  \r\n";
    }
}

class ClassicSqliteDB implements DBOperate
{
    public function Insert()
    {
        echo "ClassicSqliteDB Insert  \r\n";
    }
}

class GoldenSqliteDB implements DBOperate
{
    public function Insert()
    {
        echo "ClassicMysqlDB Insert  \r\n";
    }
}