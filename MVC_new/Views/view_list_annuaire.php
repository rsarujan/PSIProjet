<?php
require_once 'view_begin.php';
?>

<main>
<table>
	<h1> Liste des annuaires </h1>
	<tr>
		<td>
			<STRONG>Libelle</STRONG>
		</td>
	</tr>

	<?php foreach($tab as $value): ?>
		<tr>
			<td>
				<a href="?controller=list&action=informations_annuaire&id_annuaire=<?= $value['id_annuaire'] ?>"><?= e($value['libelle']) ?></a>
			</td>
			<td>
				<a href="?controller=set&action=remove_annuaire&id_annuaire=<?= $value["id_annuaire"] ?>"><img src="Content/img/remove-icon.png" alt="" class="icone"/></a>
			</td>
			<td>
				<a href="?controller=set&action=form_update_annuaire&id_annuaire=<?= $value["id_annuaire"] ?>"><img src="Content/img/edit-icon.png" alt="" class="icone"/></a>
			</td>
		</tr>
	<?php endforeach; ?>

</table>
</main>
</body>
</html>
