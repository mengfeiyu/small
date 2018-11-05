<?php

    echo $_GET['echostr'];
     $xml = file_get_contents("php://input", 'r');
     $ice = simplexml_load_string($xml,'SimpleXMLElement', LIBXML_NOCDATA);
     $gai = json_encode($ice);
     $array = json_decode($gai,1);
     switch($array['MsgType']) {
         case "event":
             if ($array['Event'] == "subscribe") {
                 echo "<xml>
                         <ToUserName><![CDATA[" . $array['FromUserName'] . "]]></ToUserName>
                         <FromUserName><![CDATA[" . $array['ToUserName'] . "]]></FromUserName>
                         <CreateTime>12345678</CreateTime>
                         <MsgType><![CDATA[text]]></MsgType>
                         <Content><![CDATA[你好欢迎关注我]]></Content>
                         </xml>";
             }
             break;
     }
     ?>