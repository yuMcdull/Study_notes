<?php

namespace DesignPatterns\Creational\StaticFactory;
require_once "people.php";

echo People::CreatePeople("Coder")->Work();
echo People::CreatePeople("Cooker")->Work();
echo People::CreatePeople("Doctor")->Work();
echo People::CreatePeople()->Work();

