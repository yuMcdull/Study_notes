<?php
    #���� postman
    # �ҵ���ǰ��Ҫȥ���õĽӿ� ��Ѱ��cookie����ҳ�� ��Ϊcookie �Ƿ����������� �ҵ���Ӧҳ�����cookieƴ��
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