<?php
namespace app;

use app\facade\Cache;

require_once './vendor/Loader.php';
// 注册自动加载
spl_autoload_register('Loader::autoload');

require_once 'base.php';

Cache::set('a',1);
echo Cache::get('a');