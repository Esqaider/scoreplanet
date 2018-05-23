<?php

$db_host = 'localhost';
$db_user = 'root'; 
$db_pass = 'qw11Fqw'; 
$db_database = 'sport_bd'; 
$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_database);
if ($mysqli->connect_errno){
	printf('Подключение к БД не удачно: %s\n', $mysqli->connect_error);
	exit();
}

