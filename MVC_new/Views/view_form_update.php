<?php
require_once 'view_begin.php';
?>
<!--
<main>
	
	<form action = "?controller=set&action=update&Id=<?= $_GET['Id']?>" method="post">
		<p> <label> Name: <input type="text" name="Name" value="<?= $Info_tab["name"] ?>"/> </label> </p>
		<p> <label> Year: <input type="text" name="Year" value="<?= $Info_tab["year"] ?>"/> </label></p>
		<p> <label> Birth Date: <input type="text" name="Birthdate" value="<?= $Info_tab["birthdate"] ?>"/></label> </p>
		<p> <label> Birth Place: <input type="text" name="BirthPlace" value="<?= $Info_tab["birthplace"] ?>"/> </label></p>
		<p> <label> County: <input type="text" name="County" value="<?= $Info_tab["county"] ?>"/></label> </p>

		<p>
			<?php foreach ($Category_tab as $v) : ?>
				<label> <input type="radio" name="Category" <?php if ($v['category'] == $Info_tab['category']) echo 'checked/'; ?> value="<?=$v['category']?>"/><?=$v['category']?></label>
			<?php endforeach ?>

		</p>
		<textarea name="Motivation" cols="70" rows="10" ><?= $Info_tab['motivation'] ?></textarea>
		<p>  <input type="submit" value="Update in database"/> </p>
	</form>


</main>
</body>
</html>-->



<main>
	<form action = "?controller=set&action=update&id_individu=<?= $_GET['id_individu']?>" method="post">
		<p> <label> Nom: <input type="text" name="Nom" value="<?= $Info_tab["Nom"] ?>"/> </label> </p>
		<p> <label> Prenom: <input type="text" name="Prenom" value="<?= $Info_tab["Prenom"] ?>"/> </label></p>
		<p> <label> Email: <input type="text" name="email" value="<?= $Info_tab["email"] ?>"/></label> </p>
		<p> <label> Numéro national: <input type="text" name="num" value="<?= $Info_tab["num"] ?>"/> </label></p>
		<!--<p>
			<label> Type d'annuaire:
				<select name="id_annuaire" style="width:150px;">
					<?php foreach ($Annuaire_tab as $v): ?>
						<option value="<?=$v['id_annuaire']?>"/> <?=$v['libelle']?></option>
					<?php endforeach; ?>
				</select>
			</label>
		</p>
		<p>
			<label> Type de statut:
				<select name="id_statut" style="width:150px;">
					<?php foreach ($Statut_tab as $v): ?>
						<option value="<?=$v['id_statut']?>"/> <?=$v['libelle']?></option>
					<?php endforeach; ?>
				</select>
			</label>
		</p>-->
		<!--<textarea name="Motivation" cols="70" rows="10"></textarea>-->
		<p>  <input type="submit" value="Mise à jour de l'individu" /> </p>
	</form>
</main>
</body>
</html>


