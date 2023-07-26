<?php

namespace DesignPatterns\Creational\StaticFactory;
require_once "factory.php";
abstract class People
{
    abstract public function Work();

    static final function CreatePeople($woker = '') {
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