<?php

namespace app\facade;

use app\container\Container;
use RuntimeException;

abstract class Facade
{
    public static function __callStatic($method,$params)
    {
        $Instance = Container::getInstance()->make(static::class);
        if (!$Instance) {
            throw new RuntimeException('A facade root has not been set.');
        }
        return call_user_func_array([$Instance, $method], $params);
    }
}