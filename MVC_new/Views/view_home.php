<?php
require_once 'view_begin.php';



?>

	<main>
		<h1>Bienvenue sur le site web de recensement des étudiants</h1>

		<p> Bienvenue sur le site web qui recense les différents individus de l'Université Paris Nanterre. Il y en a  <strong>
			<?php 
			
			echo $nb;
			?>	
		</strong> individus. <br>Vous pouvez modifier cette liste en ajoutant de nouveaux individus, en supprimant ou en mettant à jour les informations contenues dans cette base de données. Vous pouvez également ajouter, modifier, supprimer un nouveau groupe, attribuer un individu à un groupe, etc... <br><br>Dans un prochain proche, vous pourrez effectuer une recherche parmi les individus.... </p>
	</main>
</body>
</html>