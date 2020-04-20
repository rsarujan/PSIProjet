<?php

class Controller_list extends Controller{

	public function action_default(){
		$this->action_individ();
		$this->action_grp();
	}

	public function action_individ(){
		$m = Model::get_model();
		$data =['tab' => $m->get_last(), 'taille' => $m->get_nb_individus(),'url' => '?controller=list&action=pagination&start='];
		$_GET['start']=1;
		$this->render('last',$data);
	}

	public function action_grp(){
		$m = Model::get_model();
		$data =['tab' => $m->get_last_grp(), 'taille' => $m->get_nb_grp()];/*,'url' => '?controller=list&action=pagination_grp&start=']*/
		//$_GET['start']=1;
		$this->render('page',$data);
	}

	public function action_statut(){
		$m = Model::get_model();
		$data =['tab' => $m->get_last_statut(), 'taille' => $m->get_nb_grp()];/*,'url' => '?controller=list&action=pagination_grp&start=']*/
		//$_GET['start']=1;
		$this->render('statut',$data);
	}

	public function action_annuaire(){
		$m = Model::get_model();
		$data =['tab' => $m->get_last_annuaire(), 'taille' => $m->get_nb_annuaire()];/*,'url' => '?controller=list&action=pagination_grp&start=']*/
		//$_GET['start']=1;
		$this->render('annuaire',$data);
	}

	public function action_appartenir(){
		$m = Model::get_model();
		$data =['tab' => $m->get_last_appartenir(), 'taille' => $m->get_nb_appartenir()];/*,'url' => '?controller=list&action=pagination_grp&start=']*/
		//$_GET['start']=1;
		$this->render('appartenir',$data);
	}


	public function action_informations(){
		$m = Model::get_model();
		if(isset($_GET['id_individu'])
			and trim($_GET['id_individu'])!=""
			and ((string) $_GET['id_individu']) === ((string)(int) $_GET['id_individu'])
			and (int) $_GET['id_individu'] > 0
			and $m ->is_in_data_base_individu($_GET['id_individu'])){

			$data = ['tab' => $m->get_individu_informations($_GET['id_individu'])];

			foreach ($data['tab']as $key => $value) {
				if($value == null)
					$value = '???';
			}
			$this->render('informations',$data);
		}
		else{
			$this->action_error();
		}
	}

	public function action_informations_grp(){
		$m = Model::get_model();
		if(isset($_GET['id_groupe'])
			and trim($_GET['id_groupe'])!=""
			and ((string) $_GET['id_groupe']) === ((string)(int) $_GET['id_groupe'])
			and (int) $_GET['id_groupe'] > 0
			and $m ->is_in_data_base_groupe($_GET['id_groupe'])){

			$data = ['tab' => $m->get_groupe($_GET['id_groupe'])];

			foreach ($data['tab']as $key => $value) {
				if($value == null)
					$value = '???';
			}
			$this->render('informations',$data);
		}
		else{
			$this->action_error();
		}
	}

	public function action_informations_grps(){
		$m = Model::get_model();
		if(isset($_GET['id_groupe'])
			and trim($_GET['id_groupe'])!=""
			and ((string) $_GET['id_groupe']) === ((string)(int) $_GET['id_groupe'])
			and (int) $_GET['id_groupe'] > 0
			and $m ->is_in_data_base_groupe($_GET['id_groupe'])){

			$data = ['tab' => $m->get_groupe($_GET['id_groupe'])];

		/*	$data = ['tab' => $m->get_groupe($_GET['id_groupe'])];

			foreach ($data['tab']as $key => $value) {
				if($value == null)
					$value = '???';
			}*/
			$this->render('informations',$data);
		}
		else{
			$this->action_error();
		}
	}

	public function action_informations_statut(){
		$m = Model::get_model();
		if(isset($_GET['id_statut'])
			and trim($_GET['id_statut'])!=""
			and ((string) $_GET['id_statut']) === ((string)(int) $_GET['id_statut'])
			and (int) $_GET['id_statut'] > 0
			and $m ->is_in_data_base_annuaire($_GET['id_statut'])){

			$data = ['tab' => $m->get_annuaire($_GET['id_statut'])];

			foreach ($data['tab']as $key => $value) {
				if($value == null)
					$value = '???';
			}
			$this->render('informations',$data);
		}
		else{
			$this->action_error();
		}
	}

	public function action_informations_annuaire(){
		$m = Model::get_model();
		if(isset($_GET['id_annuaire'])
			and trim($_GET['id_annuaire'])!=""
			and ((string) $_GET['id_annuaire']) === ((string)(int) $_GET['id_annuaire'])
			and (int) $_GET['id_annuaire'] > 0
			and $m ->is_in_data_base_annuaire($_GET['id_annuaire'])){

			$data = ['tab' => $m->get_annuaire($_GET['id_annuaire'])];

			foreach ($data['tab']as $key => $value) {
				if($value == null)
					$value = '???';
			}
			$this->render('informations',$data);
		}
		else{
			$this->action_error();
		}
	}

	public function action_informations_appartenir(){
		$m = Model::get_model();
		if(isset($_GET['id_annee'])
			and trim($_GET['id_annee'])!=""
			and ((string) $_GET['id_annee']) === ((string)(int) $_GET['id_annee'])
			and (int) $_GET['id_annee'] > 0
			and $m ->is_in_data_base_appartenir($_GET['id_annee'])){

			$data = ['tab' => $m->get_nb_appartenir($_GET['id_annee'])];

			foreach ($data['tab']as $key => $value) {
				if($value == null)
					$value = '???';
			}
			$this->render('informations',$data);
		}
		else{
			$this->action_error();
		}
	}


	public function action_pagination(){
		if(isset($_GET['start']) and trim($_GET['start'])!="" and ((string) $_GET['start']) === ((string)(int) $_GET['start']) and (int) $_GET['start'] > 1 ){

			$m = Model::get_model();

			$data =['tab' => $m->get_individu_with_limit(25 * $_GET['start'], 25) ,'taille' => $m->get_nb_individus(),'url' => '?controller=list&action=pagination&start='];


			if (empty($data['tab'])) {
				$this->action_individus();
			}
			$this->render('pagination',$data);
		}
		else{
			$this->action_individ();
		}
	}

	public function action_list_individus(){
		$m = Model::get_model();
		$data =['tab' => $m->get_individu_with_limit(0, 25)];
		$this->render('list_individu',$data);

	}

	public function action_list_grp(){
		$m = Model::get_model();
		$data =['tab' => $m->get_grp_with_limit(0, 25)];
		$this->render('list_grp',$data);

	}

	public function action_list_statut(){
		$m = Model::get_model();
		$data =['tab' => $m->get_grp_with_limit(0, 25)];
		$this->render('list_grp',$data);

	}

	public function action_list_annuaire(){
		$m = Model::get_model();
		$data =['tab' => $m->get_grp_with_limit(0, 25)];
		$this->render('list_annuaire',$data);

	}

	public function action_list_appartenir(){
		$m = Model::get_model();
		$data =['tab' => $m->get_grp_with_limit(0, 25)];
		$this->render('list_appartenir',$data);

	}


	public function action_export_Groupe()
	{
		if (isset($_POST['id_groupe'])) {
			$m = Model::get_model();
			$result = $m->exportBy($_POST['id_groupe']);

			$filename = "PSI_Tab_Groupe_" . date('Y-m-d') . ".csv"; 
			$delimiter = ","; 
			 
			// Create a file pointer 
			$f = fopen('php://memory', 'w'); 
			 
			// Set column headers 
			$fields = array('Annee','Nom_Groupe','Nom_Individu','Prenom_Individu');

			fputcsv($f, $fields, $delimiter); 
			 
			// Get records from the database 
			

			    // Output each row of the data, format line as csv and write to file pointer 
			    while($row = $result->fetch())
			    { 
			        $lineData = array($row['id_annee'], $row['libelle'],$row['Nom'], $row['Prenom']); 
			        fputcsv($f, $lineData, $delimiter); 
			    } 
			 
			// Move back to beginning of file 
			fseek($f, 0); 
			 
			// Set headers to download file rather than displayed 
			header('Content-Type: text/csv'); 
			header('Content-Disposition: attachment; filename="' . $filename . '";'); 
			 
			// Output all remaining data on a file pointer 
			fpassthru($f); 
			 
			// Exit from file 
			exit();
			$this->render('list_appartenir',$data);

		}
	}	
}



?>
