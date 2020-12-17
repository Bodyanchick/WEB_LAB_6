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
	UPDATE reglist 
	SET Course = 3
	WHERE ID >=1 AND ID <= 6
	';
	
if ($base->query($sql)==true){
	echo "Дані добавлені";
}

else{
	echo "error" .$base->error;
}

?>