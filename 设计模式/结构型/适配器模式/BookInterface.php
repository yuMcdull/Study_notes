<?php

namespace DesignPatterns\Structural\Adapter;

interface PaperBookInterface
{
    public function turnPage();

    public function open();
}

interface EBookInterface
{
    public function pressNext();

    public function pressStart();
}

class Book implements PaperBookInterface
{

    public function turnPage()
    {
        echo '纸质书翻页'.PHP_EOL;
    }

    public function open()
    {
        echo '纸质书打开'.PHP_EOL;
    }
}

class Kindle implements EBookInterface
{

    public function pressNext()
    {
        echo '电子书翻页'.PHP_EOL;
    }


    public function pressStart()
    {
        echo '电子书打开'.PHP_EOL;
    }
}

class Ebook implements PaperBookInterface
{
    protected $eBook;

    public function __construct(EBookInterface $ebook)
    {
        $this->eBook = $ebook;
    }


    public function open()
    {
        $this->eBook->pressStart();
    }

    public function turnPage()
    {
        $this->eBook->pressNext();
    }
}