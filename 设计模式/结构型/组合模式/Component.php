<?php

namespace DesignPatterns\Structural\Composite;

abstract class Role
{
    protected $name;
    protected $userRoleList;

    function __construct($name)
    {
        $this->name = $name;
    }
    abstract public function Add(Role $role);

    abstract public function Remove(Role $role);

    abstract public function SendMessage();
}

class RoleManger extends Role
{
    public function Add(Role $role)
    {
        $this->userRoleList[] = $role;
    }

    public function Remove(Role $role)
    {
        $position = 0;
        foreach ($this->userRoleList as $n) {
            ++$position;
            if ($n == $role) {
                array_splice($this->userRoleList, ($position), 1);
            }
        }
    }

    public function SendMessage()
    {
        echo "开始发送用户角色：" . $this->name . '下的所有用户短信', PHP_EOL;
        foreach ($this->userRoleList as $role)
        {
            $role->SendMessage();
        }
    }
}

class Team extends Role
{
    public function Add(Role $role)
    {
        echo "小组用户不能添加下级了！", PHP_EOL;
    }

    public function Remove(Role $role)
    {
        echo "小组用户没有下级可以删除！", PHP_EOL;
    }

    public function SendMessage()
    {
        echo "小组用户角色：" . $this->name . '的短信已发送！', PHP_EOL;
    }
}
