<?php
require_once 'view_begin.php';
?>

<main>
	<form action = "?controller=set&action=update_statut&id_statut=<?=$_GET['id_statut']?>" method="post">
		<p> <label> Libelle du Statut: <input type="text" name="libelle" value="<?= $Statut_tab["libelle"] ?>"/> </label> </p>
		
		<!--<textarea name="Motivation" cols="70" rows="10"></textarea>-->
		<p>  <input type="submit" value="Mise à jour Groupe" /> </p>
	</form>
</main>
</body>
</html>
