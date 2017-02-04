<?php	
include "/bbd_connect.php" ; 
$devices = $bdd->query('SELECT * FROM villes');
?>
		<?php
					
while ($donnees = $devices->fetch())
{
	$ID = $donnees['ID'];
	$name = $donnees['Name'];
	$img_link = $donnees['img_link'];
	echo '
	<style>
	.mdl-card-picture'.$ID.' {
	 background:url(\'/'.$img_link .'\') center center #324a5e;
	    background-size: cover;
}
</style>';
	echo '<div class="mdl-card mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--4-col " >
						<div class="mdl-card-picture'.$ID.' mdl-card--expand"></div>
						<div class="mdl-card__supporting-text">Ville : '   .$name.    ' W</div>
						<div class="mdl-card__actions mdl-card--border">
						</div>
					</div> ';
};

$devices->closeCursor();
			
			?>