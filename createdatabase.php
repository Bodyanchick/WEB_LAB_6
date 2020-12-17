<?php
$servername = 'localhost';
$username = 'root';
$pass = 'root';

$base = new mysqli($servername, $username, $pass);
if ($base->connect_error){
	die("Connection is failed" .$base->connect_error);
}

$base->set_charset(UTF8);

$sql = 'CREATE DATABASE reglistbase';
if ($base->query($sql)==true){
	echo "База даних створена.";
}

else{
	echo "База даних вже створена.<br>" .$base->error;
}


?>