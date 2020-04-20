<?php
require_once 'view_begin.php';
?>

<main>

	<h1> Attribution d'un individu à un groupe </h1>

	<form action = "?controller=set&action=add_appartenir" method="post">
		<p> <label> Annee: <input type="text" name="id_annee"/> </label> </p>
		<p>
			<label> Groupe:
				<select name="id_annuaire" style="width:150px;">
					<?php foreach ($grp as $key => $value): ?>
						<option value="<?= e($value['id_groupe']); ?>"/> <?= e($value['libelle']);?></option>
					<?php endforeach; ?>
				</select>
			</label>
		</p>
		<p>
			<label> Individu:
				<select name="id_statut" style="width:150px;">
					<?php foreach ($individu as $key => $value): ?>
						<option value="<?= e($value['id_individu']); ?>"/> <?= e($value['Nom'].' '.$value['Prenom']);?></option>
					<?php endforeach; ?>
				</select>
			</label>
		</p>
		<!--<textarea name="Motivation" cols="70" rows="10"></textarea>-->
		<p>  <input type="submit" value="Ajouter dans Appartenir" /> </p>
	</form>
</main>
</body>
</html>
