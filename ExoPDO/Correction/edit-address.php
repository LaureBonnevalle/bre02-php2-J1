<?php

require "connexion.php";

$id = $_POST['id'];
$street = $_POST['street'];
$city = $_POST['city'];
$zipcode = $_POST['zipcode'];

$query = $db->prepare("UPDATE address
SET street = :street,
    city = :city,
    zipcode = :zipcode
WHERE id = :id
");
$parameters = [
    'id' => $id,
    'street' => $street,
    'zipcode' => $zipcode,
    'city' => $city
];
$query->execute($parameters);