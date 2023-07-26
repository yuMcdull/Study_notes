<?php
/**
 * -------命令模式-------
 * 将一个请求封装为一个对象，从而使你可用不同的请求对客户进行参数化；对请求排队或记录请求日志，以及支持可撤消的操作
 * 加一层封装将调用者 和 执行者解耦
 */
namespace DesignPatterns\Behavioral\Command;
require_once "Command.php";
require_once "Invoker.php";
require_once "Receiver.php";
// 准备执行者
$receiverA = new Receiver('A');

// 准备命令
$command = new Command1($receiverA);

// 请求者
$invoker = new Invoker($command);
$invoker->exec();