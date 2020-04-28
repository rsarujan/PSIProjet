<?php
require_once 'view_begin.php';
?>

<main>
<table>
	<h1> Liste des groupes </h1>
	<tr>
		<td><STRONG><a href="?controller=set&action=form_add_grp"> Ajouter un groupe</a></STRONG></td>
	</tr>
	<tr>
		<td>
			<STRONG>Libelle</STRONG>
		</td>
	</tr>

	<?php foreach($tab as $value): ?>
		<tr>
			<td>
				<a href="?controller=list&action=informations_grp&id_groupe=<?= $value['id_groupe'] ?>"><?= e($value['libelle']) ?></a>
			</td>
			<td>
				<a href="?controller=set&action=remove_grp&id_groupe=<?= $value["id_groupe"] ?>"><img src="Content/img/remove-icon.png" alt="" class="icone"/></a>
			</td>
			<td>
				<a href="?controller=set&action=form_update_grp&id_groupe=<?= $value["id_groupe"] ?>"><img src="Content/img/edit-icon.png" alt="" class="icone"/></a>
			</td>
		</tr>
	<?php endforeach; ?>

</table>
</main>
</body>
</html>
