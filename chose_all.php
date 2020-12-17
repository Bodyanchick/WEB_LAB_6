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

$sql ='SELECT * FROM reglist';
$result=$base->query($sql);
   if($result->num_rows>0){
   	while($row=$result->fetch_assoc()){
   		echo "<br>ID: ".$row['ID']."<br>Name: ".$row['PIB']."<br> Year of Birth: ".$row['YOB']."<br> Group: ".$row['GRUP']."<br> Course: ".$row['Course']."<br>";
   	}
	}

?>