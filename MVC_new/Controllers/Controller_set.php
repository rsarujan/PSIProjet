<?php

class Controller_set extends Controller
{

	public function action_default(){
		//$this->action_form_add_individ();
	}

	public function action_form_add_individ(){
		$m = Model::get_model();
		$data =['tab' => $m->get_last_annuaire(), 'statut' => $m->get_last_statut()];

		$this->render('form_add',$data);
	}

	public function action_add_individ(){
		$m = Model::get_model();
		$m->add_individu($_POST);
		$message = "L'individu a bien été ajouté.";
		$data=['title'=>'Individu','message'=>$message];
		$this->render('message',$data);
	}


	public function action_remove_individu(){

		if (isset($_GET['id_individu']) && trim($_GET['id_individu']) != "" && ((string) $_GET['id_individu']) == ((string)(int) $_GET['id_individu']))
		{
			$m = Model::get_model();
			if ($m->is_in_data_base_individu($_GET['id_individu'])) {
				$m->remove_individu($_GET['id_individu']);
				$message = "L'individu est bien supprimé.";
			}
			else
				$message = "Il n'y a pas d'individu sous ce nom.";
		}
		else {
			$message = "L'url ne marche pas.";
		}

		$data=['title'=>'Individu','message'=>$message];
		$this->render('message',$data);
	}







	public function action_form_add_grp(){
		$m = Model::get_model();
		$data =['groupe' => $m->get_last_grp()];

		$this->render('form_addGrp',$data);
	}

	public function action_add_grp(){
		$m = Model::get_model();
		$m->add_grp($_POST);
		$message = "Le groupe a bien été ajouté.";
		$data=['title'=>'Groupe','message'=>$message];
		$this->render('message',$data);
	}


	public function action_remove_grp(){

		if (isset($_GET['id_groupe']) && trim($_GET['id_groupe']) != "" && ((string) $_GET['id_groupe']) == ((string)(int) $_GET['id_groupe']))
		{
			$m = Model::get_model();
			if ($m->is_in_data_base_groupe($_GET['id_groupe'])) {
				$m->remove_groupe($_GET['id_groupe']);
				$message = "Le groupe est bien supprimé.";
			}
			else
				$message = "Il n'y a pas de groupe sous ce nom.";
		}
		else {
			$message = "L'url ne marche pas.";
		}

		$data=['title'=>'Groupe','message'=>$message];
		$this->render('message',$data);
	}








	public function action_form_add_statut(){
		$m = Model::get_model();
		$data =['statut' => $m->get_last_statut()];

		$this->render('form_addStatut',$data);
	}

	public function action_add_statut(){
		$m = Model::get_model();
		$m->add_statut($_POST);
		$message = "Le statut a bien été ajouté.";
		$data=['title'=>'Statut','message'=>$message];
		$this->render('message',$data);
	}


	public function action_remove_statut(){

		if (isset($_GET['id_statut']) && trim($_GET['id_statut']) != "" && ((string) $_GET['id_statut']) == ((string)(int) $_GET['id_statut']))
		{
			$m = Model::get_model();
			if ($m->is_in_data_base_statut($_GET['id_statut'])) {
				$m->remove_statut($_GET['id_statut']);
				$message = "Le statut est bien supprimé.";
			}
			else
				$message = "Il n'y a pas de statut sous ce nom.";
		}
		else {
			$message = "L'url ne marche pas.";
		}

		$data=['title'=>'Statut','message'=>$message];
		$this->render('message',$data);
	}







	public function action_form_add_annuaire(){
		$m = Model::get_model();
		$data =['annuaire' => $m->get_last_annuaire()];

		$this->render('form_addAnnuaire',$data);
	}

	public function action_add_annuaire(){
		$m = Model::get_model();
		$m->add_annuaire($_POST);
		$message = "L'annuaire a bien été ajouté.";
		$data=['title'=>'Annuaire','message'=>$message];
		$this->render('message',$data);
	}


	public function action_remove_annuaire(){

		if (isset($_GET['id_annuaire']) && trim($_GET['id_annuaire']) != "" && ((string) $_GET['id_annuaire']) == ((string)(int) $_GET['id_annuaire']))
		{
			$m = Model::get_model();
			if ($m->is_in_data_base_annuaire($_GET['id_annuaire'])) {
				$m->remove_annuaire($_GET['id_annuaire']);
				$message = "L'annuaire en question est bien supprimé.";
			}
			else
				$message = "Il n'y a pas d'annuaire sous ce nom.";
		}
		else {
			$message = "L'url ne marche pas.";
		}

		$data=['title'=>'Annuaire','message'=>$message];
		$this->render('message',$data);
	}







	public function action_form_add_appartenir(){
		$m = Model::get_model();
		$data =['grp' => $m->get_last_grp(), 'individu' => $m->get_last2()];

		$this->render('form_addAttribution',$data);
	}

	public function action_add_appartenir(){
		$m = Model::get_model();
		$m->add_Appartenir($_POST);
		//print_r($m);
		//var_dump($_POST);
		$message = "L'individu a bien été attribué à un groupe.";
		$data=['title'=>'Individu, Groupe','message'=>$message];
		$this->render('message',$data);
	}


	public function action_remove_individu_groupe(){

		if (isset($_GET['id_individu']) && trim($_GET['id_individu']) != "" && ((string) $_GET['id_individu']) == ((string)(int) $_GET['id_individu']))
		{
			$m = Model::get_model();
			if ($m->is_in_data_base_individu_groupe($_GET['id_individu'])) {
				$m->remove_individu_groupe($_GET['id_individu']);
				$message = "L'individu est bien supprimé.";
			}
			else
				$message = "Il n'y a pas d'individu sous ce nom.";
		}
		else {
			$message = "L'url ne marche pas.";
		}

		$data=['title'=>'Individu','message'=>$message];
		$this->render('message',$data);
	}





	public function action_form_update(){
		if (isset($_GET['id_individu'])) {
			$m = Model::get_model();
			if ($m->is_in_data_base_individu($_GET['id_individu'])) {
				$data =['Info_tab' => $m->get_individu_informations($_GET['id_individu'])];
			}
		}
		$this->render('form_update',$data);
	}

	public function action_update(){
		if(isset($_GET["id_individu"]) and (int) $_GET["id_individu"] >0 && trim($_GET['id_individu']) != "" && ((string) $_GET['id_individu']) == ((string)(int) $_GET['id_individu'])){
			$m = Model::get_model();
			if(isset($_POST["Nom"]) and trim($_POST["Nom"])!=""){
				$nom=$_POST["Nom"];
				//echo $nom;
				//echo $_GET["id_individu"];
			}
			else{
				$nom=null;
			}
			if(isset($_POST["Prenom"]) and trim($_POST["Prenom"])!=""){

				$prenom= $_POST["Prenom"];
			}
			else{
				$prenom=null;
			}
			if(isset($_POST["email"]) and trim($_POST["email"])!=""){
				$mail=$_POST["email"];
			}
			else{
				$mail=null;
			}

			if(isset($_POST["num"]) and trim($_POST["num"])!=""){
				$numero=$_POST["num"];
			}
			else{
				$numero=null;
			}
			
			/*if(isset($_POST["id_annuaire"]) and trim($_POST["id_annuaire"])!=""){

			}

			if(isset($_POST["id_statut"]) and trim($_POST["id_statut"])!=""){

			}*/
			if($m->Update_data_base_individu($_GET["id_individu"],$nom,$prenom,$mail,$numero/*,$_POST["id_annuaire"],$_POST["id_statut"]*/)){
				//print_r($m);echo $nom; echo $_GET["id_individu"];
				$message = "Modifié";
			}
			else{
				$message = "Non modifié";
			}

		}
		else{
			$message = "L'id n'existe pas dans la base de donnee.";
		}

		$data=['title'=>'Individu','message'=>$message];
		$this->render('message',$data);
	}



	public function action_form_update_grp(){
		if (isset($_GET['id_groupe'])) {
			$m = Model::get_model();
			if ($m->is_in_data_base_groupe($_GET['id_groupe'])) {
				$data =['Grp_tab' => $m->get_groupe($_GET['id_groupe'])];
			}
		}
		$this->render('form_updateGrp',$data);
	}



	public function action_update_Grp(){
		//echo $_GET["id_groupe"];
		if(isset($_GET["id_groupe"]) and (int) $_GET["id_groupe"] >0 && trim($_GET['id_groupe']) != "" 
			&& ((string) $_GET['id_groupe']) == ((string)(int) $_GET['id_groupe'])){
			$m = Model::get_model();
			if(isset($_POST["libelle"]) and trim($_POST["libelle"])!=""){
				$libelle=$_POST["libelle"];
			}
			else{
				$nom=null;
			}
			if($m->Update_data_base_groupe($_GET["id_groupe"],$libelle)){
				//print_r($m);
				$message = "Modifié";
			}
			else{
				$message = "Non modifié";
			}
		}
		else{
			$message = "L'id n'existe pas dans la base de donnee.";
		}
		$data=['title'=>'Groupe','message'=>$message];
		$this->render('message',$data);
	}



	public function action_form_update_statut(){
		if (isset($_GET['id_statut'])) {
			$m = Model::get_model();
			if ($m->is_in_data_base_statut($_GET['id_statut'])) {
				$data =['Statut_tab' => $m->get_statut($_GET['id_statut'])];
			}
		}
		$this->render('form_updateStatut',$data);
	}

	public function action_update_statut(){
		//echo $_GET["id_statut"];
		if(isset($_GET["id_statut"]) and (int) $_GET["id_statut"] >0 && trim($_GET['id_statut']) != "" && ((string) $_GET['id_statut']) == ((string)(int) $_GET['id_statut'])){
			$m = Model::get_model();
			if(isset($_POST["libelle"]) and trim($_POST["libelle"])!=""){
				$libelle=$_POST["libelle"];
			}
			else{
				$nom=null;
			}
			if($m->Update_data_base_statut($_GET["id_statut"],$libelle)){
				//print_r($m);
				$message = "Modifié";
			}
			else{
				$message = "Non modifié";
			}
		}
		else{
			$message = "L'id n'existe pas dans la base de donnee.";
		}
		$data=['title'=>'Statut','message'=>$message];
		$this->render('message',$data);
	}





	public function action_form_update_annuaire(){
		if (isset($_GET['id_annuaire'])) {
			$m = Model::get_model();
			if ($m->is_in_data_base_annuaire($_GET['id_annuaire'])) {
				$data =['Grp_tab' => $m->get_annuaire($_GET['id_annuaire'])];
			}
		}
		$this->render('form_updateAnnuaire',$data);
	}

	public function action_update_annuaire(){
		//echo $_GET["id_annuaire"];
		if(isset($_GET["id_annuaire"]) and (int) $_GET["id_annuaire"] >0 && trim($_GET['id_annuaire']) != "" && ((string) $_GET['id_annuaire']) == ((string)(int) $_GET['id_annuaire'])){
			$m = Model::get_model();
			if(isset($_POST["libelle"]) and trim($_POST["libelle"])!=""){
				$libelle=$_POST["libelle"];
			}
			else{
				$nom=null;
			}
			if($m->Update_data_base_annuaire($_GET["id_annuaire"],$libelle)){
				//print_r($m);
				$message = "Modifié";
			}
			else{
				$message = "Non modifié";
			}
		}
		else{
			$message = "L'id n'existe pas dans la base de donnee.";
		}
		$data=['title'=>'Annuaire','message'=>$message];
		$this->render('message',$data);
	}
}
?>
