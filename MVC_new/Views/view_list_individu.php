<?php
require_once 'view_begin.php';

// Get status message
if(!empty($_GET['status'])){
    switch($_GET['status']){
        case 'succ':
            $statusType = 'alert-success';
            $statusMsg = 'Les individus ont bien été importés.';
            break;
        case 'err':
            $statusType = 'alert-danger';
            $statusMsg = 'Il y a un problème... Veuillez reessayer plus tard.';
            break;
        case 'invalid_file':
            $statusType = 'alert-danger';
            $statusMsg = 'Veuillez insérer un fichier CSV valide.';
            break;
        default:
            $statusType = '';
            $statusMsg = '';
    }
}
?>

<!-- Display status message -->
<?php if(!empty($statusMsg)){ ?>
<div class="col-xs-12">
    <div class="alert <?php echo $statusType; ?>"><?php echo $statusMsg; ?></div>
</div>
<?php } ?>



<main>
<table>
	<h1> Liste des individus </h1>
	<div class="row">
	    <!-- Import & Export link -->
	    <div class="col-md-12 head">
	        <div class="float-right"><dd>
	            <a href="javascript:void(0);" class="btn btn-success" onclick="formToggle('importFrm');"><i class="plus"></i> Importer</a>
	            &nbsp <a href="exportData.php" class="btn btn-primary"><i class="exp"></i>Exporter</a>
	        </div>
	    </div>
	    <!-- CSV file upload form -->
	    <div class="col-md-12" id="importFrm" style="display: none;">
	        <form action="?controller=list&action=import_individu" method="post" enctype="multipart/form-data">
	            <input type="file" name="file" />
	            <input type="submit" class="btn btn-primary" name="importSubmit" value="IMPORT">
	        </form>
	    </div>
	</div><br>
	<tr>
		<td>
			<STRONG>Nom</STRONG>
		</td>
		<td>
			<STRONG>Prenom</STRONG>
		</td>
		<td>
			<STRONG>Email</STRONG>
		</td>
		<td>
			<STRONG>Numero</STRONG>
		</td>
	</tr>

	<?php foreach($tab as $value): ?>
		<tr>
			<td>
				<a href="?controller=list&action=informations&id_individu=<?= $value['id_individu'] ?>"><?= e($value['Nom']) ?></a>
			</td>
			<td>
				<?= e($value['Prenom']);?>
			</td>
			<td>
				<?= e($value['email']);?>
			</td>
			<td>
				<?= e($value['num']);?>
			</td>
			<td>
				<a href="?controller=set&action=remove_individu&id_individu=<?= $value["id_individu"] ?>"><img src="Content/img/remove-icon.png" alt="" class="icone"/></a>
			</td>
			<td>
				<a href="?controller=set&action=form_update&id_individu=<?= $value["id_individu"] ?>"><img src="Content/img/edit-icon.png" alt="" class="icone"/></a>
			</td>
		</tr>
	<?php endforeach; ?>

</table>
<center>
	<div class="pagination">
		<?php

		if($_GET['start']==1)
			echo '<a href="">&laquo;</a>';
		else
			echo '<a href="' . e($url) . ($_GET['start']-1) . '">&laquo;</a>';

		?>
		<?php
		if(($_GET['start']-4)<1){
			$i=1;
		}
		else{
			$i=($_GET['start']-4);
		}
		if(($_GET['start']+5)<($taille/25)){
			$max=($_GET['start']+5);
		}
		else{
			$max=($taille/25);
		}
		for ($i; $i <$max ; $i++) {
			if($i==$_GET['start'])
				echo '<a href="' . e($url) . $i . '" class=active>' . $i . '</a>';
			else
				echo '<a href="' . e($url) . $i . '">' . $i . '</a>';
		}

		if ($_GET['start']==floor($taille/25))
			echo '<a href="">&raquo;</a>';
		else
			echo '<a href="' . e($url) . ($_GET['start']+1) .'">&raquo;</a>';



		?>
	</div>
</center>
</main>
</body>
</html>


<!-- Show/hide CSV upload form -->
<script>
function formToggle(ID){
    var element = document.getElementById(ID);
    if(element.style.display === "none"){
        element.style.display = "block";
    }else{
        element.style.display = "none";
    }
}
</script>