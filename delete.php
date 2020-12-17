<?php
$servername = 'localhost';
$username = 'root';
$pass = 'root';
$dbname = 'reglistbase';

$base = new mysqli($servername, $username, $pass, $dbname);
if ($base->connect_error){
	die("Connection is failed" .$base->connect_error);
}

$base->set_charset(UTF8);

$sql ='
	DROP TABLE reglist
	';
	
if ($base->query($sql)==true){
	echo "Таблиця видалена";
}

else{
	echo "error" .$base->error;
}

?>