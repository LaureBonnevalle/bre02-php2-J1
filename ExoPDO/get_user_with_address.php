<?php

require ("connexion.php");

$query = $db->prepare('SELECT users.last_name, users.first_name, address.street, address.zipcode, address.city FROM `users` 
Join address ON users.address = address.id WHERE users.id = :id');
$parameters = [
    'id' => $_GET['id']
];
$query->execute($parameters);

$user = $query->fetch(PDO::FETCH_ASSOC);

echo "<pre>";
var_dump ($user);
echo "</pre>";

?>