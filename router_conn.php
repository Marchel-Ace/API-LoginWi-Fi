


<?php
require_once 'routeros_api.class.php';
$ip = '192.168.2.1';
$user = 'admin';
$pass = 'baliteam888';
$port = '8728';
// $server = "10.4.4.100";
// $username = "simano";
// $password = "simanoPxL";
// $dbname = "si_mano";

// // Create connection
// $db = mysqli_connect($server, $username, $password, $dbname);

// if( !$db ){
//     die("Gagal terhubung dengan database: " . mysqli_connect_error());
// }

// $sql = "SELECT * FROM mikrotik_data WHERE '1' = active";
// $query = mysqli_query($db, $sql);
// while($data = mysqli_fetch_array($query)) {
//     $user = $data['username'];
//     $ip = $data['ip'];
//     $pass = $data['password'];
//     $port = $data['port']; 
// 	$API = new RouterosAPI();
// 	$API->debug = false;
// 	$API->connect($ip, $user, $pass, $port);
// }
$API = new RouterosAPI();
	$API->debug = false;
	$API->connect($ip, $user, $pass, $port);

