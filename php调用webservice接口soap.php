<?php
/* 参考链接 */
/*
 *①https://www.cnblogs.com/lichenwei/p/3891297.html
 *②https://blog.csdn.net/u013032788/article/details/46915035
 */
$client = new SoapClient("http://fy.webxml.com.cn/webservices/EnglishChinese.asmx?wsdl");
$parameters = array("wordKey"=>"test");
//中英文双向翻译返回数据：数组
$result = $client->TranslatorString($parameters);
echo "<pre>";
print_r($result->TranslatorStringResult)."<br />";
echo "</pre>";

//实际调用
$soap=new SoapClient('http://58.215.215.34:8090/WXService.asmx?wsdl');    //这里填写你要调用的URL
$xmldata = '<request><funcode>LISDetail</funcode><paralist><ybhm>20180422OAU7016</ybhm></paralist></request>';
$data = array('XmlText'=>$xmldata);
$result = $soap->ExeFunction($data);
print_r($result);
exit;
