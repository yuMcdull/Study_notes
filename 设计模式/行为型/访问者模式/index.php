<?php
/**
 * -------访问者模式-------
 * 表示一个作用于某对象结构中的各元素的操作。它使你可以在不改变各元素的类的前提下定义作用于这些元素的新操作
 * 例：短信发送 多个短信服务商，它们作为访问者需要去使用各自的短信发送及APP推送接口
 * 访问者模式比较适合数据结构稳定的结构
 */
use DesignPatterns\Behavioral\Visitor;
require_once "Message.php";
require_once "ServiceVisitor.php";
require_once "Structure.php";
$o = new ObjectStructure();

$o->Attach(new PushMessage());
$o->Attach(new SendMessage());

$v1 = new AliYun();
$v2 = new JiGuang();

$o->Accept($v1);
$o->Accept($v2);