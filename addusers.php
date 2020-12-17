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

$sql ="
		
	INSERT INTO reglist(PIB, YOB, GRUP, EMAIL) 
	VALUES  ('Крамарчук Bіктор Олександрович', '2000', 'ФБ-95', 'vutya@gmail.com'),
	 ('Кирил Андрійович Іванченко', '2000', 'ФМ-98', 'ivaaaaaan@gmail.com'),
	 ('Вадим Йосипович Шевченко', '1999', 'ФБ-91', 'shevatop@gmail.com'),
('Денис Валентинович Захарчук', '2001', 'ФЕ-93', 'denchik@gmail.com'),
('Романченко Микита Федорович', '2002', 'ФБ-95', 'mikitich@gmail.com'),
('Надія Олексійович Боднаренко', '2000', 'ФЕ-92', 'benderovets@gmail.com'),
('Євген Євгенійович Васильєв', '2003', 'ФЕ-91', 'zekonbekon@gmail.com'),
('Богдан Євгенійович Кравченко', '2002', 'ФБ-94', 'kravchuk@gmail.com'),
('Лисенко Артем Євгенійович', '2001', 'ФБ-96', 'lisica228@gmail.com'),
('Кравченко Артем Миколайович', '1999', 'ФБ-95', 'atemiiy@gmail.com')

	";
	
if ($base->query($sql)==true){
	echo "Дані добавлені";
}

else{
	echo "error" .$base->error;
}

?>