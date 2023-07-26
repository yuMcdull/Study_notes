<?php
namespace DesignPatterns\Creational\AbstractFactory;
require_once "abFactory.php";
require_once "product.php";
class platformFactoryGolden extends AbstractFactory {
    public function CreateMysqlDB()
    {
        return new GoldenMysqlDB();
    }

    public function CreateSqliteDB()
    {
        return new GoldenSqliteDB();
    }
}