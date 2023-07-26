<?php
namespace DesignPatterns\Creational\AbstractFactory;
require_once "abFactory.php";
require_once "product.php";
class platformFactoryClassic extends AbstractFactory {
    public function CreateMysqlDB()
    {
        return new ClassicMysqlDB();
    }

    public function CreateSqliteDB()
    {
        return new ClassicSqliteDB();
    }
}