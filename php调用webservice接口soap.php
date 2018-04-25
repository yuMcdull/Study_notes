<?php
/* WebService与RESTful API
web service（SOAP）与HTTP接口的区别
什么是web service？ soap请求是HTTP POST的一个专用版本，遵循一种特殊的xml消息格式Content-type设置为: text/xml任何数据都可以xml化。

为什么要学习web service？ 大多数对外接口会实现web service方法而不是http方法，如果你不会，那就没有办法对接。

一、webservice 的概念

Web 是使应用程序可以与平台和编程语言无关的方式进行相互通信的一项技术。Web 服务是一个软件接口，它描述了一组可以在网络上通过标准化的 XML 消息传递访问的操作。它使用基于 XML 语言的协议来描述要执行的操作或者要与另一个 Web 服务交换的数据。一组以这种方式交互的 Web 服务在面向服务的体系结构（Service-Oriented Architecture，SOA）中定义了特殊的 Web 服务应用程序。

简单的说WebService是一个SOA（面向服务的编程）的架构，它是不依赖于语言，不依赖于平台，可以实现不同的语言（通过 xml 描述）间的相互调用，通过Internet进行基于Http协议的网络应用间的交互。通过SOAP在Web上提供的软件服务，使用WSDL文件进行说明，并通过UDDI进行注册。

XML：(Extensible Markup Language)扩展型可标记语言。面向短期的临时数据处理、面向万维网络，是Soap的基础。

Soap：(Simple Object Access Protocol)简单对象存取协议。是XML Web Service 的通信协议。当用户通过UDDI找到你的WSDL描述文档后，他通过可以SOAP调用你建立的Web服务中的一个或多个操作。SOAP是XML文档形式的调用方法的规范，它可以支持不同的底层接口，像HTTP(S)或者SMTP。

WSDL：(Web Services Description Language) WSDL 文件是一个 XML 文档，用于说明一组 SOAP 消息以及如何交换这些消息。大多数情况下由软件自动生成和使用。

UDDI (Universal Description, Discovery, and Integration) 是一个主要针对Web服务供应商和使用者的新项目。在用户能够调用Web服务之前，必须确定这个服务内包含哪些商务方法，找到被调用的接口定义，还要在服务端来编制软件，UDDI是一种根据描述文档来引导系统查找相应服务的机制。UDDI利用SOAP消息机制（标准的XML/HTTP）来发布，编辑，浏览以及查找注册信息。它采用XML格式来封装各种不同类型的数据，并且发送到注册中心或者由注册中心来返回需要的数据。

二、HTTP接口

Http协议是建立在TCP协议基础之上的，当浏览器需要从服务器获取网页数据的时候，会发出一次Http请求。Http会通过TCP建立起一个到服务器的连接通道，当本次请求需要的数据完毕后，Http会立即将TCP连接断开，这个过程是很短的。所以Http连接是一种短连接，是一种无状态的连接。
HTTP协议的主要特点可概括如下：
1.支持客户/服务器模式。
2.简单快速：客户向服务器请求服务时，只需传送请求方法和路径。请求方法常用的有GET、HEAD、POST。每种方法规定了客户与服务器联系的类型不同。由于HTTP协议简单，使得HTTP服务器的程序规模小，因而通信速度很快。
3.灵活：HTTP允许传输任意类型的数据对象。正在传输的类型由Content-Type加以标记。
4.无连接：无连接的含义是限制每次连接只处理一个请求。服务器处理完客户的请求，并收到客户的应答后，即断开连接。采用这种方式可以节省传输时间。
5.无状态：HTTP协议是无状态协议。无状态是指协议对于事务处理没有记忆能力。缺少状态意味着如果后续处理需要前面的信息，则它必须重传，这样可能导致每次连接传送的数据量增大。另一方面，在服务器不需要先前信息时它的应答就较快。
*/



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
