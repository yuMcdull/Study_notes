<?php
/**
 * -------状态模式-------
 * 允许一个对象在其内部状态改变时改变它的行为，状态模式把所研究的对象的行为包装在不同的状态对象里
 * 状态模式的意图是让一个对象在其内部状态改变的时候，其行为也随之改变。
 */
namespace DesignPatterns\Behavioral\State;
require_once "Context.php";
require_once "State.php";
$c = new Context();
$stateA = new StateA();
$c->SetState($stateA);
$c->Request();
$c->Request();
$c->Request();
$c->Request();