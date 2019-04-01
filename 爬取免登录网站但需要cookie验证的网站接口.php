<?php
    #工具 postman
    # 找到当前需要去调用的接口 找寻其cookie设置页面 因为cookie 是服务器端设置 找到对应页面进行cookie拼接
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_TIMEOUT,5);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLINFO_HEADER_OUT,true);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_NOBODY,false);
$content=curl_exec($ch);
$headerStr=curl_getinfo($ch,CURLINFO_HEADER_OUT);
list($responseStr,$contentStr)=explode("

",$content,2);
echo "request header:".$headerStr;
echo '<br/>';
echo 'response header:'.$responseStr;
echo '<br/>';
echo 'response content:'.$contentStr;