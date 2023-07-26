<?php
/**
 * 目的
 * 避免以标准方式（new Foo()）创建对象的成本，而是创建一个原型（prototype）并克隆它。复制的时候，__construct()方法并没有
 * 被调用减少创建对象时的开销
 * 应用场景：
 * 大量数据（例如：通过 ORM 在数据库中创建百万行数据。）
 * 克隆出副本后对比对象后经历一系列操作后的状态
 * 处理的对象比较简单，并且对象之间的区别很小，可能只是很固定的几个属性不同的时候
 */
namespace DesignPatterns\Creational\Prototype;
require_once "BarBookPrototype.php";
require_once "FooBookPrototype.php";
$barBook = new BarBookPrototype();
$barBook->setTitle("123");
$barBookBark = clone $barBook;
echo $barBookBark->getTitle();
$barBook->setTitle("321");
echo $barBookBark->getTitle();
$barBookBark->setTitle("111");
echo $barBook->getTitle();


