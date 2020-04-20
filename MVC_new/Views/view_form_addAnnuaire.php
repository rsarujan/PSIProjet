<?php
require_once 'view_begin.php';
?>

<main>

	<h1> Ajouter un annuaire </h1>

	<form action = "?controller=set&action=add_annuaire" method="post">
		<p> <label> Libelle du annuaire: <input type="text" name="libelle"/> </label> </p>
		
		<!--<textarea name="Motivation" cols="70" rows="10"></textarea>-->
		<p>  <input type="submit" value="Ajouter dans annuaire" /> </p>
	</form>
</main>
</body>
</html>
