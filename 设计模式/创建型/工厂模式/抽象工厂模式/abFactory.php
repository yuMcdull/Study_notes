<?php
namespace DesignPatterns\Creational\AbstractFactory;

abstract class AbstractFactory {
    abstract public function CreateMysqlDB();
    abstract public function CreateSqliteDB();
}
