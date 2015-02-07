<?php
//PDO Connection
$user = "";
$password = "";
$database_name = "";
$hostname = "";
$dsn = 'mysql:dbname=' . $database_name . ';host=' . $hostname;

//Connecting to DB server with PDO 
$conn = new PDO($dsn, $user, $password);


?>
