<?php

require_once 'routeros_api.class.php';
require_once 'formatbytesbites.php';
$ip = '192.168.2.1';
$user = 'admin';
$pass = 'baliteam888';
$port = '8728';

$addr = $_SERVER['REMOTE_ADDR'];
$API = new RouterosAPI();
$API->debug = false;
$API->connect($ip, $user, $pass, $port);
  
 $getstatus = $API->comm("/ip/hotspot/active/getall", array(
  "?address" => $addr,));


foreach ($getstatus as $status){
$myObj->name = $status['user'];
$myObj->comment = $status['comment'];
$myObj->uptime = $status['uptime'];
$myObj->usage = formatBytes($status['bytes-out']);

$myJSON = json_encode($myObj);

echo $myJSON;
}
echo $addr;

 ?>

