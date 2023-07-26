<?php
namespace app;

use app\container\Container;
use app\library\Cache;


Container::getInstance()->bind([
    facade\Cache::class  => Cache::class,

]);