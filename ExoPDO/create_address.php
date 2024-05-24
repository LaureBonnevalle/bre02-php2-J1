<?php

require ("connexion.php");

$street= $_POST["street"];
$city= $_POST["city"];
$zipcode=$_POST["zipcode"];

if(isset($_POST["street"]) && isset($_POST["city"]) && isset($_POST["zipcode"]))
{
    echo "Les champs existent.<br>";
    
    // Je vérifie si ils ne sont pas vides
    
    if(!empty($_POST["street"]) && !empty($_POST["city"])&& !empty($_POST["zipcode"]))
    {
        echo "Les champs ne sont pas vides<br>";
        
        echo "rue: {$_POST["street"]} ville: {$_POST["city"]} code postal: {$_POST["zipcode"]}<br>";
    }
    else
    {
        echo "/!\ ERREUR : un ou plusieurs champs sont vides /!\<br>";
    }
}
else
{
    echo "/!\ ERREUR : un ou plusieurs champs n'existent pas /!\<br>";
}


$query = $db->prepare('INSERT INTO address (street, city, zipcode) VALUES (NULL, :street, :city,:zipcode)');
$parameters = [
    'street' => $street,
    'city' => $city,
    'zipcode'=> $zipcode
];
$query->execute($parameters);

$addressId = $db->lastInsertId();

var_dump ($street,$city,$zipcode);


?>