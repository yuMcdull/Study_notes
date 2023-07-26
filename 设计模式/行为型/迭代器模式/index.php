<?php
/**
 * -------迭代器模式-------
 * 提供一种方法访问一个容器（Container）对象中各个元素，而又不需暴露该对象的内部细节。 当你需要访问一个聚合对象，而且不管
 * 这些对象是什么都需要遍历的时候，就应该考虑使用迭代器模式。PHP标准库（SPL）中提供了迭代器接口 Iterator，要实现迭代器模式，
 * 实现该接口即可
 * foreach
 */
namespace DesignPatterns\Behavioral\Iterator;
use DesignPatterns\Creational\Prototype\BarBookPrototype;

require_once "Book.php";
require_once "BookList.php";
require_once "BookListIterator.php";

$bookList = new BookList();
$bookList->addBook(new Book('book-A', 'AA'));
$bookList->addBook(new Book('book-B', 'BB'));
$bookList->addBook(new Book('book-C', 'CC'));
$bookIterator = new BookListIterator($bookList);

while ($bookIterator->valid()) {
    echo $bookIterator->current()->getAuthorAndTitle();
    $bookIterator->next();
}