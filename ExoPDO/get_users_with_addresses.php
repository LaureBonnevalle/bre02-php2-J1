<?php

require ("connexion.php");

$query = $db->prepare('SELECT users.last_name, users.first_name, address.street, address.zipcode, address.city FROM users 
Join address ON users.address = address.id ');
$query->execute();

$users = $query->fetchAll(PDO::FETCH_ASSOC);

var_dump ($users);


?>