<?php
/**
 * -------策略模式-------
 * 实现某一个功能有多种算法或者策略，我们可以根据环境或者条件的不同选择不同的算法或者策略来完成该功能。如查找、排序等，
 * 在一个类中，如需要提供多种查找算法，可以将这些算法写到一个类中，在该类中提供多个方法，
 * 每一个方法对应一个具体的查找算法；当然也可以将这些查找算法封装在一个统一的方法中
 * 类似工厂模式，
 * 工厂相关的模式属于创建型模式，顾名思义，这种模式是用来创建对象的，返回的是new出来的对象。要调用对象的什么方法是
 * 由客户端来决定的
 * 策略模式属性行为型模式，通过执行上下文，将要调用的函数方法封装了起来，客户端只需要调用执行上下文的方法就可以了
 */
namespace DesignPatterns\Behavioral\Strategy;
require_once "Context.php";
require_once "Strategy.php";
$strategyA = new StrategyA();
$context = new Context($strategyA);
$context->ContextInterface();

$strategyB = new StrategyB();
$context = new Context($strategyB);
$context->ContextInterface();

$strategyC = new StrategyC();
$context = new Context($strategyC);
$context->ContextInterface();