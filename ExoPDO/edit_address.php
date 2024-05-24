<?php

require ("connexion.php");

$id= $_POST["id"];
$street= $_POST["street"];
$city= $_POST["city"];
$zipcode=$_POST["zipcode"];

if(isset ($_POST["id"]) &&($_POST["street"]) && isset($_POST["city"]) && isset($_POST["zipcode"]))
{
    echo "Les champs existent.<br>";
    
    // Je vérifie si ils ne sont pas vides
    
    if(($_POST["id"]) && !empty($_POST["street"]) && !empty($_POST["city"])&& !empty($_POST["zipcode"]))
    {
        echo "Les champs ne sont pas vides<br>";
        
        echo " ID: rue:{$_POST["id"]} {$_POST["street"]} ville: {$_POST["city"]} code postal: {$_POST["zipcode"]}<br>";
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

$query = $db->prepare('UPDATE address SET id = :id, street = :street, city =:city WHERE address.id = :id');
$parameters = [
    'id'=> $id,
    'street' => $street,
    'city' => $city,
    'zipcode'=> $zipcode
];
$query->execute($parameters);

var_dump ($street,$city,$zipcode);


?>