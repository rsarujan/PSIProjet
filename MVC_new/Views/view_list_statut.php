<?php
require_once 'view_begin.php';
?>

<main>
<table>
	<h1> Liste des statuts </h1>
	<tr><td><STRONG><a href="?controller=set&action=form_add_statut"> Ajouter un statut</a></STRONG></td></tr>
	<tr>
		<td>
			<STRONG>Libelle</STRONG>
		</td>
	</tr>

	<?php foreach($tab as $value): ?>
		<tr>
			<td>
				<a href="?controller=list&action=informations_statut&id_statut=<?= $value['id_statut'] ?>"><?= e($value['libelle']) ?></a>
			</td>
			<td>
				<a href="?controller=set&action=remove_statut&id_statut=<?= $value["id_statut"] ?>"><img src="Content/img/remove-icon.png" alt="" class="icone"/></a>
			</td>
			<td>
				<a href="?controller=set&action=form_update_statut&id_statut=<?= $value["id_statut"] ?>"><img src="Content/img/edit-icon.png" alt="" class="icone"/></a>
			</td>
		</tr>
	<?php endforeach; ?>

</table>
</main>
</body>
</html>
