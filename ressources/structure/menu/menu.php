<div class="mdl-layout__drawer"> <span class="mdl-layout-title">Catégories</span>
		<nav class="mdl-navigation">
			<?php
				$categories = $bdd->query('SELECT * FROM categories');

								while ($donnees = $categories->fetch())
									{
										$Name = $donnees['Name'];
										$Link = $donnees['Link'];
										echo '<a class="mdl-navigation__link" href="'.$Link.'">'.$Name.'</a> ';
									}
							$categories->closeCursor();
								?>
		</nav>
		<div class="center">
			<div class="bottom">
				<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Ajouter une catégorie</button>
			</div>
		</div>
	</div>