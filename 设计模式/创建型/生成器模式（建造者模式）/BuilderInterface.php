<?php

namespace DesignPatterns\Creational\Builder;

interface Builder
{
    //设置账户名
    public function SetName($param);
    //设置密码
    public function SetPass($param);
    //设置端口
    public function SetPort($param);
    public function CreateDB();
    public function GetDB();
}