<?php
require_once "ServiceVisitor.php";
interface Message
{
    public function Msg(ServiceVisitor $v);
}

class PushMessage implements Message
{
    public function Msg(ServiceVisitor $v)
    {
        echo '推送脚本启动：';
        $v->PushMsg($this);
    }
}

class SendMessage implements Message
{
    public function Msg(ServiceVisitor $v)
    {
        echo '短信脚本启动：';
        $v->SendMsg($this);
    }
}