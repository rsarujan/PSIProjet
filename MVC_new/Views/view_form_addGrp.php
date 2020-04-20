<?php
require_once 'view_begin.php';
?>

<main>

	<h1> Ajouter un groupe </h1>

	<form action = "?controller=set&action=add_grp" method="post">
		<p> <label> Nom du groupe: <input type="text" name="libelle"/> </label> </p>
		
		<!--<textarea name="Motivation" cols="70" rows="10"></textarea>-->
		<p>  <input type="submit" value="Ajouter dans Groupe" /> </p>
	</form>
</main>
</body>
</html>
