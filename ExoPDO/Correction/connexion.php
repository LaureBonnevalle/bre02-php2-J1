<?php

$host = "db.3wa.io";
$port = "3306";
$dbname = "laurebonnevalle_phpj4";
$connexionString = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";

$user = "laurebonnevalle";
$password = "0143d153a0a995dd144dbabddf0210fe";

$db = new PDO(
    $connexionString,
    $user,
    $password
);

var_dump ($db);

?>