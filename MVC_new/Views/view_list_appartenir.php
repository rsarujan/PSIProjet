<?php
require_once 'view_begin.php';
?>


<main>
<table>
	<h1> Liste des groupes attribués à chaque individu </h1>
	<div class="row">
	    <!-- Import & Export link -->
	    <div class="col-md-12 head">
	    	<form action = "?controller=list&action=export_Groupe" method="post">
				<p>
					<label for="id_groupe">Exporter:</label>
					<select name="id_groupe" onchange="document.getElementsByTagName('form').submit();">
					    <option value="">--Choisir une option--</option>
					    <option value="1">L3 MIAGE APP</option>
					    <option value="2">M1 MIAGE APP</option>
					    <option value="3">M2 MIAGE APP</option>
					    <option value="3">L2 MIASHS</option>
					    <option value="4">Encadrants</option>


					</select>
					<p><input type="text" name="test" value="a">
				<p> <input type="submit" value="Exporter" /> </p>
			</form>

	        <div class="float-right"><dd>
	            Exporter:
	            <a href="exportDataG1.php" class="btn btn-primary"><i class="exp"></i>L3-MIAGE-APP</a>&nbsp
	            <a href="exportDataG2.php" class="btn btn-primary"><i class="exp"></i>M1-MIAGE-APP</a>&nbsp
	            <a href="exportDataG3.php" class="btn btn-primary"><i class="exp"></i>M2-MIAGE-APP</a>&nbsp
	            <a href="exportDataG4.php" class="btn btn-primary"><i class="exp"></i>L2-MIASHS</a>&nbsp
	            <a href="exportDataG5.php" class="btn btn-primary"><i class="exp"></i>Encadrant</a>&nbsp
	           	<a href="exportDataG.php" class="btn btn-primary"><i class="exp"></i>Tous les groupes</a>

	        </div>
	    </div>
	    <!-- CSV file upload form -->
	    <div class="col-md-12" id="importFrm" style="display: none;">
	        <form action="importData.php" method="post" enctype="multipart/form-data">
	            <input type="file" name="file" />
	            <input type="submit" class="btn btn-primary" name="importSubmit" value="IMPORT">
	        </form>
	    </div>
	</div>
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
				<a href="?controller=list&action=informations_grp&id_groupe=<?=$value['id_groupe'] ?>"><?= e($value['id_groupe']) ?></a>
			</td>
			<td>
				<a href="?controller=list&action=informations&id_individu=<?= $value['id_individu'] ?>"><?= e($value['id_individu']) ?></a>
			</td>
		</tr>
	<?php endforeach; ?>

</table>

</main>
</body>
</html>
