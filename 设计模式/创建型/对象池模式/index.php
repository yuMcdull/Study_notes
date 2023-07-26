<?php
/**
 * ---------对象池模式-------------
 * 对象池（也称为资源池）被用来管理对象缓存。对象池是一组已经初始化过且可以直接使用的对象集合，用户在使用对象时可以从对象
 * 中获取对象，对其进行操作处理，并在不需要时归还给对象池而非销毁它。
 * 一次web请求：
 * 1：用户请求
 * 2：web服务器（apache，nginx，iis等）接收请求
 * 3：服务器通过cgi协议调用php，运行php文件
 * 4：php文件处理逻辑，返回数据，php进程 销毁/回收（该次执行的php变量内存等全部回收）
 * 5：web服务器接收数据，返回给用户，web服务器关闭连接
 * 6：用户接收数据，用户关闭连接
 * php-fpm :是php-cgi的进程管理器,管理多个php-cgi进程/线程
 * 常规web服务没有对象池概念，请求都是一次性的，只有php-cli或借助swoole开发的项目可以实现（常驻进程）
 * 使用注意点：
 *  对象初始化、实例化的代价高，且需要经常实例化，但每次实例化的数量较少的情况下使用对象池可以获得显著的性能提升。常见的
 * 用对象池模式的技术包括线程池、数据库连接池、任务队列池、图片资源对象池等
 * 如果要实例化的对象较小，不需要多少资源开销，就没有必要使用对象池模式了，这非但不会提升性能，反而浪费内存空间，甚至降低性能
 */
namespace DesignPatterns\Creational\Pool;
require_once "Pool.php";
require_once "Mysql.php";

$pool = new pool;
$pool->init(5,"DesignPatterns\Creational\Pool\Mysql");
$mysql = $pool->get();
$mysql->Say();
$pool->put($mysql);

