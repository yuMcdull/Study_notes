<?php
/*概念理解
   参考链接:https://blog.csdn.net/qjyong/article/details/2148558
*/
/*
Web Service概述

Web Service的定义
W3C组织对其的定义如下，它是一个软件系统，为了支持跨网络的机器间相互操作交互而设计。Web Service服务通常被定义为一组模块化的API，它们可以通过网络进行调用，来执行远程系统的请求服务。

这里我们从一个程序员的视角来观察web service。在传统的程序编码中，存在这各种的函数方法调用。通常，我们知道一个程序模块M中的方法A，向其发出调用请求，并传入A方法需要的参数P，方法A执行完毕后，返回处理结果R。这种函数或方法调用通常发生在同一台机器上的同一程序语言环境下。现在的我们需要一种能够在不同计算机间的不同语言编写的应用程序系统中，通过网络通讯实现函数和方法调用的能力，而Web service正是应这种需求而诞生的。

最普遍的一种说法就是，Web Service = SOAP + HTTP + WSDL。其中，SOAP Simple Object Access Protocol）协议是web service的主体，它通过HTTP或者SMTP等应用层协议进行通讯，自身使用XML文件来描述程序的函数方法和参数信息，从而完成不同主机的异构系统间的计算服务处理。这里的WSDL（Web Services Description Language）web 服务描述语言也是一个XML文档，它通过HTTP向公众发布，公告客户端程序关于某个具体的 Web service服务的URL信息、方法的命名，参数，返回值等。
下面，我们先来熟悉一下SOAP协议，看看它是如何描述程序中的函数方法、参数及结果对象的。

SOAP协议简介

什么是SOAP
SOAP 指简单对象访问协议，它是一种基于XML的消息通讯格式，用于网络上，不同平台，不同语言的应用程序间的通讯。可自定义，易于扩展。一条 SOAP 消息就是一个普通的 XML 文档，包含下列元素：
• Envelope 元素，标识XML 文档一条 SOAP 消息
• Header 元素，包含头部信息的XML标签
• Body 元素，包含所有的调用和响应的主体信息的标签
• Fault 元素，错误信息标签。

以上的元素都在 SOAP的命名空间http://www.w3.org/2001/12/soap-envelope中声明；
SOAP的语法规则
• SOAP 消息必须用 XML 来编码
• SOAP 消息必须使用 SOAP Envelope 命名空间
• SOAP 消息必须使用 SOAP Encoding 命名空间
• SOAP 消息不能包含 DTD 引用
• SOAP 消息不能包含 XML 处理指令

*/

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
