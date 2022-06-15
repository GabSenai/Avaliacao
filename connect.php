<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "atividade";

try{
	$connect = new PDO("mysql:host=" . $host . ";dbname=" . $db,$user,$pass);
}catch(exception $e){
	echo "Erro " . $e; 
}

?>