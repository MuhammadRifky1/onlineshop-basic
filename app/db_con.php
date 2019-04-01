<?php 

$server = "localhost";
$user	= "root";
$pass	= "";
$db_name = "itech";

try {
	
	$conn = new PDO("mysql:host=$server;dbname=$db_name",$user, $pass);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	$e->getMessage();
}



?>