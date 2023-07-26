<?php

interface ServiceVisitor
{
    public function SendMsg(SendMessage $s);
    public function PushMsg(PushMessage $p);
}

class AliYun implements ServiceVisitor
{
    public function SendMsg(SendMessage $s)
    {
        echo '阿里云发送短信！', PHP_EOL;
    }
    public function PushMsg(PushMessage $p)
    {
        echo '阿里云推送信息！', PHP_EOL;
    }
}

class JiGuang implements ServiceVisitor
{
    public function SendMsg(SendMessage $s)
    {
        echo '极光发送短信！', PHP_EOL;
    }
    public function PushMsg(PushMessage $p)
    {
        echo '极光推送短信！', PHP_EOL;
    }
}