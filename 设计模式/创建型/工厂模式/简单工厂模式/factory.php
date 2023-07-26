<?php

namespace DesignPatterns\Creational\SimpleFactory;
require_once "people.php";
// 改为静态工厂是加上 final 关键字
class Factory
{
    // 此方法为静态方法时 称为静态工厂
    static public function CreatePeople($woker = '') {
        switch ($woker) {
            case 'Coder':
                return new Coder;
            case 'Cooker':
                return new Cooker;
            case 'Doctor':
                return new Doctor;
            default:
                return new Worker;
        }
    }
}
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