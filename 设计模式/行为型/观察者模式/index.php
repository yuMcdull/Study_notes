<?php
/**
 * -------观察者模式-------
 * 观察者模式也被称作发布/订阅模式
 * 一旦主体对象状态发生改变，与之关联的观察者对象会收到通知，并进行相应操作。我们不希望为了维持一致性而使各类紧密耦合，这样
 * 会给维护、扩展和重用都带来不便。观察者就是解决这类的耦合关系的。 消息队列系统、事件都使用了观察者模式。
 * PHP 为观察者模式定义了两个接口：SplSubject 和 SplObserver。SplSubject
 * 可以看做主体对象的抽象，SplObserver 可以看做观察者对象的抽象，要实现观察者模式，只需让主体对象实现 SplSubject ，观察者对象实现 SplObserver，并实现相应方法即可
 * 例：订单状态修改 需要发消息+更新库存
 */
namespace DesignPatterns\Behavioral\Observer;
require_once "Observer.php";
require_once "Subject.php";

$order = new Order();
$order->attach(new Goods());
$order->attach(new Message());

$order->pay(1001,123456);
$order->notify();

