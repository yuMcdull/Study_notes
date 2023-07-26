<?php
/**
 * -------责任链模式-------
 * 使多个对象都有机会处理请求，从而避免请求的发送者和接收者之间的耦合关系。将这些对象连成一条链，并沿着这条链传递该请求，直到有一个对象处理它为止
 */
namespace DesignPatterns\Behavioral\ChainOfResponsibilities;
require_once "Hanlder.php";
$handle1 = new Hanlder1();
$handle2 = new Hanlder2();
$handle3 = new Hanlder3();

$handle1->setSuccessor($handle2);
$handle2->setSuccessor($handle3);

$requests = [22, 'aaa', 55, 'cc', [1, 2, 3], null, new \stdClass];

foreach ($requests as $request) {
    echo $handle1->HandleRequest($request) . PHP_EOL;
}