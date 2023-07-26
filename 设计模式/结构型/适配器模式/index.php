<?php
/**
 * ---------适配器模式-------------
 * 将一个类的接口转换成客户希望的另外一个接口。使得原本由于接口不兼容而不能一起工作的那些类可以一起工作
 */
namespace DesignPatterns\Structural\Adapter;
require_once "BookInterface.php";
$book = new Book();
$book -> open();
$book -> turnPage();

$kindle = new Kindle();
$ebook = new Ebook($kindle);
$ebook -> open();
$ebook -> turnPage();