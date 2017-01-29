<?php
	include $_SERVER['DOCUMENT_ROOT']."/bbd_connect.php" ;
	include $_SERVER['DOCUMENT_ROOT'].'/ressources/structure/head/head.php';
	include $_SERVER['DOCUMENT_ROOT'].'/ressources/structure/entete/entete.php';
	include $_SERVER['DOCUMENT_ROOT'].'/ressources/structure/menu/menu.php';
?>
<main class="mdl-layout__content mdl-color--grey-100">
		<div class="page-content mdl-grid demo-content">

<?php include("/content/maps.php");  ?>	
	</div>
<?php include("/ressources/hoover_button/hoover_button.php");  ?>	
	</main>

	</div>
	</body>

	</html>