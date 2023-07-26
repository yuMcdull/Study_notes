<?php
/**
 * -------模板方法模式-------
 * 类继承的诠释，在一个方法中定义一个算法的骨架，而将一些步骤延迟到子类中。模板方法使得子类可以在不改变算法结构的情况下，重
 * 新定义算法
 * 中的某些步骤。 模板方法模式将主要的方法定义为 final，防止子类修改算法骨架，将子类必须实现的方法定义为 abstract。而普通
 * 的方法（无 final 或 abstract 修饰）则称之为钩子（hook）
 */
namespace DesignPatterns\Behavioral\TemplateMethod;
require_once "Template.php";

$demo = new PeopleA();

$demo->life();