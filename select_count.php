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

	$query ="SELECT Count(ID) AS Count_FB95 FROM reglist WHERE GRUP LIKE 'ФБ-95'";
    $result = mysqli_query($base, $query) or die("Виникла помилка: " . mysqli_error($base));
	if($result)
	{
    	$rows = mysqli_num_rows($result);
     
	    echo "<table><tr><th>Count_FB95</th></tr>";
	    for ($i = 0 ; $i < $rows ; ++$i)
    	{
        	$row = mysqli_fetch_row($result);
        	echo "<tr>";
            	for ($j = 0 ; $j < 2 ; ++$j) echo "<td>$row[$j]</td>";
        	echo "</tr>";
    	}
    	echo "fuck";
     
    mysqli_free_result($result);

?>