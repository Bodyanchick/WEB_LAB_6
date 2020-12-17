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
	alter table reglist
		add Course nvarchar(15) default 2
	';
	
if ($base->query($sql)==true){
	echo "Дані добавлені";
}

else{
	echo "error" .$base->error;
}

?>