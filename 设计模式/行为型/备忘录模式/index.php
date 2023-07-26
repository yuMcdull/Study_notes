<?php
/**
 * -------备忘录模式-------
 * 在不破坏封装性的前提下，捕获一个对象的内部状态，并在该对象之外保存这个状态。这样以后就可将该对象恢复到原先保存的状态
 * 备忘录模式所涉及的角色有三个：备忘录(Memento)角色、发起人(Originator)角色、负责人(Caretaker)角色。 这三
 * 个角色的职责分别是：
 * 发起人：记录当前时刻的内部状态，负责定义哪些属于备份范围的状态，负责创建和恢复备忘录数据。
 * 备忘录：负责存储发起人对象的内部状态，在需要的时候提供发起人需要的内部状态。
 * 管理角色：对备忘录进行管理，保存和提供备忘录。
 */
namespace DesignPatterns\Behavioral\Memento;
require_once "Originator.php";
require_once "Caretaker.php";
require_once "Memento.php";
$o = new Originator();
$o->SetState('状态1');
$o->ShowState();

// 保存状态
$c = new Caretaker();
$c->SetMemento($o->CreateMemento());

$o->SetState('状态2');
$o->ShowState();

// 还原状态
$o->SetMeneto($c->GetMemento());
$o->ShowState();