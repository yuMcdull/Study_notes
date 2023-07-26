<?php

namespace app\container;

use RuntimeException;

class Container
{
    public $Bind = []; //绑定的映射对象
    public $MapInstance = [];//存放门面实例
    private static $Instance;

    private function __construct()
    {
    }

    public static function getInstance(): Container
    {
        if (!(self::$Instance instanceof self))
        {
            self::$Instance = new self();
        }
        return self::$Instance;
    }

    public function bind($abstract): Container
    {
        if (is_array($abstract))
            $this->Bind = array_merge($this->Bind, $abstract);

        return $this;
    }

    public function make($abstract, $vars = [],$getNew = false)
    {
        if (isset($this->MapInstance[$abstract]) && !$getNew){
            return $this->MapInstance[$abstract];
        }
        if (!isset($this->Bind[$abstract]))
            throw new RuntimeException('facade is not bind');
        $this->MapInstance[$abstract] = $this->invokeClass($this->Bind[$abstract],$vars);
        return $this->MapInstance[$abstract];
    }

    /**
     * 调用反射执行类的实例化 支持依赖注入
     * @access public
     * @param string $class 类名
     * @param array $vars 变量
     * @return mixed
     */
    public function invokeClass(string $class, array $vars = [])
    {
        try {
            $reflect = new \ReflectionClass($class);
        } catch (\ReflectionException $e) {
            throw new RuntimeException($e->getMessage());
        }
        $constructor = $reflect->getConstructor();
        if ($constructor) {
            $args = $this->bindParams($constructor, $vars);
        } else {
            $args = [];
        }
        try {
            return $reflect->newInstanceArgs($args);
        } catch (\ReflectionException $e) {
            throw new \RuntimeException($e->getMessage());
        }
    }

    protected function bindParams($reflect, $vars = []): array
    {
        $args = [];

        if ($reflect->getNumberOfParameters() > 0) {
            // 判断数组类型 数字数组时按顺序绑定参数
            reset($vars);
            $type   = key($vars) === 0 ? 1 : 0;
            $params = $reflect->getParameters();

            foreach ($params as $param) {
                $name  = $param->getName();
                $class = $param->getClass();

                if ($class) {
                    $className = $class->getName();
                    $args[]    = $this->make($className);
                } elseif (1 == $type && !empty($vars)) {
                    $args[] = array_shift($vars);
                } elseif (0 == $type && isset($vars[$name])) {
                    $args[] = $vars[$name];
                } elseif ($param->isDefaultValueAvailable()) {
                    $args[] = $param->getDefaultValue();
                } else {
                    throw new \InvalidArgumentException('method param miss:' . $name);
                }
            }
        }
        return $args;
    }
}