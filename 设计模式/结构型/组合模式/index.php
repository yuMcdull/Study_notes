<?php
/**
 * ----------组合模式-------------
 * 将对象组合成树形结构以表示“部分-整体”的层次结构。使得用户对单个对象和组合对象的使用具有一致性
 */
namespace DesignPatterns\Structural\Composite;
require_once "Component.php";
$root = new RoleManger('网站用户');
$root->add(new Team('主站用户'));
$root->SendMessage();

// 社交版块
$root2 = new RoleManger('社交版块');
$managerA = new RoleManger('论坛用户');
$managerA->add(new Team('北京论坛用户'));
$managerA->add(new Team('上海论坛用户'));

$managerB = new RoleManger('sns用户');
$managerB->add(new Team('北京sns用户'));
$managerB->add(new Team('上海sns用户'));

$root2->add($managerA);
$root2->add($managerB);
$root2->SendMessage();