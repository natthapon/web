<?php
$host = 'localhost';
$user = 'root';
$pass = '12345';
$db = 'tro';

$mysqli = new mysqli($host,$user,$pass,$db);
if($mysqli->connect_errno){
	echo "Connect failed : ".$mysqli->connect_errno." - ".$mysqli->connect_error;
	exit();
}
$sql = "SELECT * FROM `customer`";
$result = $mysqli->query($sql);
$num_rows = $result->num_rows;
	echo $num_rows;

?>