<?php
/**
 * ---------装饰器模式----------
 * 动态地给一个对象添加一些额外的职责，就增加功能来说，相比生成子类更为灵活
 * 动态是手段，组合是目的
 */
namespace DesignPatterns\Structural\Decorator;
require_once "Component.php";
$face = new Face();
$decoratorA = new DecoratorA($face);
$decoratorA->operation();

$decoratorB = new DecoratorB($face);
$decoratorB->operation();

