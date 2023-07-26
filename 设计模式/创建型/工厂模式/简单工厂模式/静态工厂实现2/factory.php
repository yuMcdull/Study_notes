<?php

namespace DesignPatterns\Creational\StaticFactory;
require_once "people.php";

class Coder extends People {
    public function Work()
    {
        return "I am Coder\r\n";
    }
}
class Cooker extends People {
    public function Work()
    {
        return "I am Cooker\r\n";
    }
}
class Doctor extends People {
    public function Work()
    {
        return "I am Doctor\r\n";
    }
}
class Worker extends People {
    public function Work()
    {
        return "I am Worker\r\n";
    }
}