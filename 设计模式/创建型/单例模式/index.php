<?php
/**
 * -------单例模式-------
 * 保证一个类在应用的生命周期仅有一个实例，并提供一个访问它的全局访问点
 */
namespace DesignPatterns\Creational\Singleton;
require_once "Singleton.php";
$a = Singleton::getInstance();
$b = Singleton::getInstance();
var_dump($a === $b);