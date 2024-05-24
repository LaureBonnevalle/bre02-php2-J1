<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */

require "connexion.php";

$query = $db->prepare('SELECT * FROM users WHERE id = :id');
$parameters = [
    'id' => $_GET['id']
];
$query->execute($parameters);
$user = $query->fetch(PDO::FETCH_ASSOC);


echo "<pre>";
var_dump($user);
echo "</pre>";
