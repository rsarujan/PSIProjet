<?php
require_once 'view_begin.php';
?>

<main>

	<h1> Ajouter un statut </h1>

	<form action = "?controller=set&action=add_statut" method="post">
		<p> <label> Libelle du statut: <input type="text" name="libelle"/> </label> </p>
		
		<!--<textarea name="Motivation" cols="70" rows="10"></textarea>-->
		<p>  <input type="submit" value="Ajouter dans statut" /> </p>
	</form>
</main>
</body>
</html>
