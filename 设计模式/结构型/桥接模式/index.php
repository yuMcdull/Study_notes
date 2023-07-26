<?php
/**
 * ----------桥接模式-----------
 * 通过使用桥接模式，你可以将不同类型的类联系起来，以便它们可以彼此通信，这有助于提高代码的可重用性和可维护性。
 */
namespace DesignPatterns\Structural\Bridge;
class Bridge {
    public function bridge($from, $to) {
        echo "Bridge is between " . $from->Say() . " and " . $to->Cry();
    }
}

class Dog {
    public function Say() {
        return "Dog";
    }
}

class Cat{
    public function Cry() {
        return "Cat";
    }
}

$bridge = new Bridge();
$from = new Dog();
$to = new Cat();
$bridge->bridge($from, $to);
