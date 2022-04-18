<?php

//$db_host = 'localhost';
//$db_name = 'astoncv';
//$username = 'root';
//$password = '';

$db_host = 'localhost';
$db_name = 'u_200072061_astoncv';
$username = 'u-200072061';
$password = '3hcMTw3JQ17S3zs';

try {
    $db = new PDO("mysql:dbname=$db_name;host=$db_host", $username, $password);
	
} catch(PDOException $ex) {
	echo("Failed to connect to the database.<br>");
	echo($ex->getMessage());
	exit;
}
?>