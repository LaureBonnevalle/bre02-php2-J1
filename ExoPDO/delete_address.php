<?php

require ("connexion.php");

$del= $_POST["id"];


if(isset ($_POST["id"]) )
{
    echo "Le champs existe.<br>";
    
    // Je vérifie si ils ne sont pas vides
    
    if(($_POST["id"]) )
    {
        echo "Le champ n est pas vide<br>";
        
        echo " ID: rue:{$_POST["id"]} <br>";
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

$query = $db->prepare('DELETE FROM address WHERE address.id = :id');
$parameters = [
    'id'=> $del,
];
$query->execute($parameters);


?>