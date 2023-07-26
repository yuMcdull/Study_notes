<?php
/**
 * ---------方法工厂模式-----------
 * 工厂方法将简单工厂的实例进行了一层封装，由专门的工厂类进行实例的输出
 * 工厂方法提供一个创建对象的接口，让其实现工厂决定创建哪种类型的产品类
 * 工厂方法模式遵守了开闭原则(对扩展开放，对修改关闭)，而简单工厂模式没遵守。工厂方法模式拓展性更高
 * 一个抽象工厂类，派生出多个具体工厂类。而每个具体工厂类只能创建一个具体产品类的实例
 */
namespace DesignPatterns\Creational\FactoryMethod;
require_once "factory.php";

$workerFactory = new TeacherFactory;
$workerFactory->getObj()->work();

$workerFactory = new CoderFactory();
$workerFactory->getObj()->work();

$workerFactory = new CookerFactory();
$workerFactory->getObj()->work();



