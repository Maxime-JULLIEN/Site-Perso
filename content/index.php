<?php	
include "/bbd_connect.php" ; 
$devices = $bdd->query('SELECT * FROM villes');
?>
		<?php
					
while ($donnees = $devices->fetch())
{
	$ID = $donnees['ID'];
	$name = $donnees['Name'];
	$description = $donnees['Description'];
	echo '
	<style>
	.mdl-card-picture'.$ID.' {
	 background:url(\'/downtown/content/villes/'.$name .'/presentation.jpg\') center center #324a5e;
	    background-size: cover;
}
</style>';
	echo '<div class="mdl-card mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--4-col " >
						<div class="mdl-card-picture'.$ID.' mdl-card--expand"></div>
						<div class="mdl-card__actions mdl-card--border">'.$name.'</div>
						<div class="mdl-card__supporting-text">'   .$description.    '</div>
					</div> ';
};

$devices->closeCursor();
			
			?>