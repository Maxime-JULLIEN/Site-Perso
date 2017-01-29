<?php	
include $_SERVER['DOCUMENT_ROOT']."/bbd_connect.php" ; 
$devices = $bdd->query('SELECT * FROM devices');
?>
		<?php
					
while ($donnees = $devices->fetch())
{
	$ID = $donnees['ID'];
	$State = $donnees['State'];
	$IP = $donnees['IP'];
	$Link = $donnees['Link'];
	$ON = $donnees['ON'];
	$OFF = $donnees['OFF'];
	$name = $donnees['Name'];
	$img_link = $donnees['img_link'];
	$conso = $donnees['conso'];
	$Connected = $donnees['Connected'];
	if($Connected == "0"){$Connected="disabled";} else{$Connected="";};
	if($State == "1"){$ButtonState="checked";} else{$ButtonState="";};
	echo '
	<style>
	.mdl-card-picture'.$ID.' {
	 background:url(\'/'.$img_link .'\') center center #324a5e;
	    background-size: cover;
}
</style>';
	echo '<div class="mdl-card mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--4-col '.$Connected.' " >
						<div class="mdl-card-picture'.$ID.' mdl-card--expand"></div>
						<div class="mdl-card__supporting-text">Consommation actuelle : '   .$conso.    ' W</div>
						<div class="mdl-card__actions mdl-card--border">
							<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch'.$ID.'"> <span class="mdl-switch__label mdl-card__title-text">'.$name.'</span>
								<input type="checkbox" id="switch'.$ID.'" class="mdl-switch__input" onchange="object(this, \''   .$IP.    '\', \''   .$Link.    '\', \''   .$ON.    '\',\''   .$OFF.    '\'); myFunction2(' .$ID. '); " '.$ButtonState.'> </label>
						</div>
					</div> ';
};

$devices->closeCursor();
			
			?>