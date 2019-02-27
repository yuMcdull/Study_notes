<?php
include_once __DIR__."/Plugin/wxworker/callback/WXBizMsgCrypt.php";
include __DIR__."/Plugin/wxworker/utils/Utils.class.php";
include __DIR__."/Plugin/wxworker/utils/HttpUtils.class.php";

$encodingAesKey = "";
$token = "";
$corpId = ""; //企业微信ID

$wxcpt = new WXBizMsgCrypt($token, $encodingAesKey, $corpId);

$sReqMsgSig = $_GET['msg_signature'];
$sReqTimeStamp = $_GET['timestamp'];
$sReqNonce = $_GET['nonce'];

$sReqData = file_get_contents("php://input");
$errCode = $wxcpt->DecryptMsg($sReqMsgSig, $sReqTimeStamp, $sReqNonce, $sReqData, $sMsg);
if ($errCode == 0) {
    $a = new Utils;
    $postObj = $a->Xml2Array($sMsg);
    $fromUsername = ($postObj['FromUserName']=='ken') ? 1 : $postObj['FromUserName'];
    $toUsername = $postObj['ToUserName'];
    $keyword = trim($postObj['Content']);
    $time = time();
    $textTpl = "<xml><ToUserName><![CDATA[%s]]></ToUserName>
                        <FromUserName><![CDATA[%s]]></FromUserName>
                        <CreateTime>%s</CreateTime>
                        <MsgType><![CDATA[text]]></MsgType>
                        <Content><![CDATA[%s]]></Content>
                        <FuncFlag>0</FuncFlag>
                        </xml>";
    if($postObj['MsgType']=='event'){
        if($postObj['Event'] == 'click'){
            if($postObj['EventKey'] == 'checkin'){
                $contentStr="测试成功:";
                $sRespData = sprintf($textTpl, $fromUsername, $toUsername, $time, $contentStr);
            }
        }
    }
} else {
    print("ERR: " . $errCode . "\n\n");
    //exit(-1);
}


$c = new HttpUtils;
$sEncryptMsg = ""; //xml格式的密文
$errCode = $wxcpt->EncryptMsg($sRespData, $sReqTimeStamp, $sReqNonce, $sEncryptMsg);
if ($errCode == 0) {
    var_dump($sEncryptMsg);
} else {
    print("ERR: " . $errCode . "\n\n");
}