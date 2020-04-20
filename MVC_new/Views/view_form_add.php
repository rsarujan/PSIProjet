<?php
require_once 'view_begin.php';
?>

<main>

	<h1> Ajouter un individu </h1>

	<form action = "?controller=set&action=add_individ" method="post">
		<p> <label> Nom: <input type="text" name="Nom"/> </label> </p>
		<p> <label> Prenom: <input type="text" name="Prenom"/> </label></p>
		<p> <label> Email: <input type="text" name="email"/></label> </p>
		<p> <label> Numéro national: <input type="text" name="num"/> </label></p>
		<p>
			<label> Type d'annuaire:
				<select name="id_annuaire" style="width:150px;">
					<?php foreach ($tab as $key => $value): ?>
						<option value="<?= e($value['id_annuaire']); ?>"/> <?= e($value['libelle']);?></option>
					<?php endforeach; ?>
				</select>
			</label>
		</p>
		<p>
			<label> Type de statut:
				<select name="id_statut" style="width:150px;">
					<?php foreach ($statut as $key => $value): ?>
						<option value="<?= e($value['id_statut']); ?>"/> <?= e($value['libelle']);?></option>
					<?php endforeach; ?>
				</select>
			</label>
		</p>
		<!--<textarea name="Motivation" cols="70" rows="10"></textarea>-->
		<p>  <input type="submit" value="Ajouter dans Individu" /> </p>
	</form>
</main>
</body>
</html>
