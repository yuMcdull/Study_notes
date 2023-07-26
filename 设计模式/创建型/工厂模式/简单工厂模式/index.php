<?php
/**
 * ------简单工厂--------
 * 可以根据参数的不同返回不同类的实例。简单工厂模式定义一个类来负责创建其他类的实例，被创建的实例通常都具有共同
 * 父类。它的抽象层次低，工厂类一般也不会包含复杂的对象生成逻辑，只能适用于生成结构比较简单，扩展性要求较低的对象
 * 例：根据业务调用不同的短信接口 阿里、百度、极光短信
 */
namespace DesignPatterns\Creational\SimpleFactory;
require_once "factory.php";

$factory = new Factory();

echo $factory->CreatePeople("Coder")->Work();
echo $factory->CreatePeople("Cooker")->Work();
echo $factory->CreatePeople("Doctor")->Work();
echo $factory->CreatePeople()->Work();

