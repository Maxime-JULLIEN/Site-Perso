<?php 
$bdd = new PDO('mysql:host=127.0.0.1;dbname=home;charset=utf8', 'root', 'root');
$ID = $_GET['ID'];
//echo $ID;
$reponse = $bdd->query('SELECT State FROM devices WHERE ID='.$ID);
$donnees = $reponse->fetch();
$State = $donnees['State'];

if($State == 1){ $State = 0; }
else { $State = 1; }
//echo $State;
$bdd->exec('UPDATE devices SET State = '.$State.' WHERE ID = '.$ID); 
?>