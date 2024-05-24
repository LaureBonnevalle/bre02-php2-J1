<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */

require "connexion.php";

$query = $db->prepare('SELECT users.*, address.street, address.zipcode, address.city FROM users 
    JOIN address ON users.address = address.id');

$query->execute();
$users = $query->fetchAll(PDO::FETCH_ASSOC);


echo "<pre>";
var_dump($users);
echo "</pre>";
