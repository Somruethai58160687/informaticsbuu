<?php
$access_token = 'rEgiNscRd2tj6qYik5nXO2+sKc+59c3lzPCh0ZmhOBVQgXQVJ85Zq3SRzbygv8fg8ch08qpVg/U+Dxqy/cPUeg/6t9Rt0vCBe7mKNGMqcfoCLthmb3bH6RJFnhClJQLY5BNIY6NqRoywsjbll1y7TQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
