<?php
require_once 'view_begin.php';
?>

<main>
	<form action = "?controller=set&action=update_Grp&id_groupe=<?= $_GET['id_groupe']?>" method="post">
		<p> <label> Nom du groupe: <input type="text" name="libelle" value="<?= $Grp_tab["libelle"] ?>"/> </label> </p>
		
		<!--<textarea name="Motivation" cols="70" rows="10"></textarea>-->
		<p>  <input type="submit" value="Mise à jour Groupe" /> </p>
	</form>
</main>
</body>
</html>
