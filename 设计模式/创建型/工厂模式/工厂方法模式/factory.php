<?php

namespace DesignPatterns\Creational\FactoryMethod;

require_once "abFactory.php";
require_once "abInterface.php";
class CoderFactory extends FactoryMethod {
    protected function createObj()
    {
        return new Coder;
    }
}

class TeacherFactory extends FactoryMethod {
    protected function createObj()
    {
        return new Teacher();
    }
}

class CookerFactory extends FactoryMethod {
    protected function createObj()
    {
        return new Cooker;
    }
}

class Coder implements Skill {
    public function work()
    {
        echo "写代码\r\n";
    }
}

class Teacher implements Skill {
    public function work()
    {
        echo "教书\r\n";
    }
}

class Cooker implements Skill {
    public function work()
    {
        echo "烧菜\r\n";
    }
}