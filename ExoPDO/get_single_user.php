<?php

require ("connexion.php");

$query = $db->prepare('SELECT * FROM users WHERE id = :id');
$parameters = [
    'id' => $_GET['id']
];
$query->execute($parameters);
$user = $query->fetch(PDO::FETCH_ASSOC);

echo "<pre>"; /** echo "<pre>" pour la mise en page*/
var_dump ($user);
echo "</pre>";

?>