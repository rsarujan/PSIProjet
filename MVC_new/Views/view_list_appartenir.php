<?php
require_once 'view_begin.php';
?>


<main>
<table>
	<h1> Liste des groupes attribués à chaque individu </h1>
	<tr><td>
	    <div class="col-md-12 head">
	    	<form action = "?controller=list&action=export_Groupe" method="post">
				<p>
					<label for="id_groupe"><STRONG>Exporter:</STRONG></label> 
					<select name="id_groupe" onchange="document.getElementsByTagName('form').submit();">
					    <option value="">--Choisir une option--</option>
					    <option value="1">L3 MIAGE APP</option>
					    <option value="2">M1 MIAGE APP</option>
					    <option value="3">M2 MIAGE APP</option>
					    <option value="4">L2 MIASHS</option>
					    <option value="5">Encadrants</option>
					</select>
				<p> <input type="submit" value="Exporter" /> </p>
			</form>
	    </div></td>
	    <td><STRONG><a href="?controller=set&action=form_add_appartenir"> Attribuer un individu à un groupe</a></STRONG></td>
	    <td>
			<STRONG><a href="?controller=list&action=api" target='_blank'>Afficher l'API</a></STRONG>
		</td></tr>
	
	<tr>
		<td>
			<STRONG>Annee</STRONG>
		</td>
		<td>
			<STRONG>Groupe</STRONG>
		</td>
		<td>
			<STRONG>Individu</STRONG>
		</td>
	</tr>

	<?php foreach($tab as $value): ?>
		<tr>
			<td>
				<?= e($value['id_annee']) ?></a>
			</td>

			<td>
                <!--<a href="?controller=list&action=informations_grp&id_groupe=</*?=$value['id_groupe'] */?>">--><?= e($value['libelle']) ?></a>
            </td>
            <td>
                <a href="?controller=list&action=informations&id_individu=<?= $value['id_individu'] ?>"><?= e($value['Prenom']) ?></a>
            </td>
			<td>
				<a href="?controller=set&action=remove_individu_groupe&id_individu=<?= $value["id_individu"] ?>"><img src="Content/img/remove-icon.png" alt="" class="icone"/></a>
			</td>
		</tr>
	<?php endforeach; ?>

</table>

</main>
</body>
</html>
