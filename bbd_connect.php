<?php

// Connexion à la base de données
try
{
    $bdd = new PDO('mysql:host=127.0.0.1;dbname=downtown;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

?>