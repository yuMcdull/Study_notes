<?php
/**
 * -------中介者模式-------
 * 用一个中介对象来封装一系列的对象交互。中介者使各对象不需要显式地相互引用，从而使其耦合松散，而且可以独立地改变它们之间的交互 案例：聊天室
 */
namespace DesignPatterns\Behavioral\Mediator;
require_once "Colleague.php";
require_once "Mediator.php";
$m = new ConcreteMediator();

$c1 = new Colleague1($m);
$c2 = new Colleague2($m);

$m->colleague1 = $c1;
$m->colleague2 = $c2;

$c1->Send("吃过饭了吗？");
$c2->Send("没有呢，你打算请客？");