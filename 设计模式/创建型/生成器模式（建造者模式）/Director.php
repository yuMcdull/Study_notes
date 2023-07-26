<?php

namespace DesignPatterns\Creational\Builder;
class Director
{
    public function build($builder,$name,$pass,$port)
    {
        $builder->CreateDB();
        $builder->SetName($name);
        $builder->SetPass($pass);
        $builder->SetPort($port);
        return $builder->GetDB();
    }
}