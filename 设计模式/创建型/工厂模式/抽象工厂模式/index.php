<?php
/**
 * ---------抽象工厂模式-----------
 * 提供一个创建一系列相关或相互依赖对象的接口，而无须指定它们具体的类
 * 抽象工厂模式包含如下角色：
 * AbstractFactory：抽象工厂
 * ConcreteFactory：具体工厂
 * AbstractProduct：抽象产品
 * Product：具体产品
 * 参考案例：中台处理2个产品的数据写入多个类型的数据库
 * 缺点：细分导致功能文件较多
 * 优点：拓展性强 高内聚，低耦合（类的内聚性高，耦合度低）
 * 一个抽象工厂类，可以派生出多个具体工厂类。每个具体工厂类可以创建多个具体产品类的实例
 *  工厂方法模式只有一个抽象产品类，而抽象工厂模式有多个。工厂方法模式的具体工厂类只能创建一个具体产品类的实例，而抽象工厂模式可以创建多个
 */
namespace DesignPatterns\Creational\AbstractFactory;
require_once "platformFactoryClassic.php";
require_once "platformFactoryGolden.php";
require_once "abFactory.php";
require_once "product.php";
$platform = new platformFactoryClassic();
$platform ->CreateMysqlDB()->Insert();
$platform ->CreateSqliteDB()->Insert();

$platform = new platformFactoryGolden();
$platform ->CreateMysqlDB()->Insert();
$platform ->CreateSqliteDB()->Insert();
