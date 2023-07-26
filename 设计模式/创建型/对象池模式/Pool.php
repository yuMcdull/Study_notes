<?php

namespace DesignPatterns\Creational\Pool;
class pool
{
    private $instances = array();

    public function init($num,$class)
    {
        for ($i=0;$i<$num;$i++)
        {
            $this->instances[] = new $class;
        }
    }

    public function get()
    {
        if (count($this->instances) > 0) {
            return array_pop($this->instances);
        }
        return false;
    }

    public function put($instance)
    {
        $this->instances[] = $instance;
    }
}