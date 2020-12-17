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

$sql = '
	CREATE TABLE reglist
	(
	ID INT auto_increment primary key,
	PIB TEXT,
	YOB INT,
	GRUP TEXT,
	EMAIL TEXT
	)';
if ($base->query($sql)==true){
	echo "Таблиця створена";
}

else{
	echo "Таблиця вже створена <br>	 " .$base->error;
}


?>