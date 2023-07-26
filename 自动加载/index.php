<?php

namespace app;
// 引入加载器
include './vendor/Loader.php';
// 注册自动加载 不推荐使用__autoload 7.2废弃，8.0移除 上下文中仅能定义一次
spl_autoload_register('Loader::autoload');
use app\one\oneone\AA;
//use app\one\oneone\Demo;
use app\one\A;
use app\two\A as  AAA;
new A();
new AAA();
//new one\A();
//new AA();
//
new one\oneone\Demo();
//new Demo();