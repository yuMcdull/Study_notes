<?php
/**
 * -------生成器（建造者）模式---------
 * 用于构建复杂对象的各个部分
 * 组成包含：
 *        ① 接口标准 （制定建造者要拥有的行为标准）
 *        ② 主导构造类 （将实现了接口的类，按照统一顺序进行逐步调用，生成实例）
 * 将一个复杂对象的构建与它的表示分离，使得同样地构建过程可以创建不同的表示
 * 生成不同顺序的构造类获取不同形式的实例
 * 例子：创造不同的DB实例/拓展举例 上两桌不一样的菜系
 */
namespace DesignPatterns\Creational\Builder;
require_once "MysqlBuilder.php";
require_once "OracleBuilder.php";
require_once "Director.php";

$mysqlBuilder = new MysqlBuilder();
$OracleBuilder = new OracleBuilder();
$director = new Director();
$director ->build($mysqlBuilder,"root","123456","3306");
$director ->build($OracleBuilder,"root1","1234561","3305");
