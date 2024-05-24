<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */

require "connexion.php";

$query = $db->prepare('SELECT users.*, address.street, address.zipcode, address.city FROM users 
    JOIN address ON users.address = address.id  
    WHERE users.id = :id');

$parameters = [
    'id' => $_GET['id']
];
$query->execute($parameters);
$user = $query->fetch(PDO::FETCH_ASSOC);


echo "<pre>";
var_dump($user);
echo "</pre>";
