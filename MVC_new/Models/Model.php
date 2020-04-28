<?php

class Model{
	private $db; //Attribut privé contenant l'objet PDO

	//Attribut qui contiendra l'unique instance du modèle
	private static $instance = null;
	/**
	* Constructeur créant l'objet PDO et l'affectant à $db
	*/
	private function __construct() {

		try {
			$this->db = new PDO('mysql:host=localhost;dbname=PSI', 'root', 'root');
			$this->db->query('SET NAMES utf8');
			$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch (PDOException $e) {
			die ('Echec connexion, erreur n°'. $e->getCode() . ':' . $e->getMessage());
		}
	}
	/**
	* Méthode permettant de récupérer l'instance de la classe Model
	*/
	public static function get_model(){
		//Si la classe n'a pas encore été instanciée
		if (is_null(self::$instance))
		self::$instance = new Model(); //On l'instancie
		return self::$instance; //On retourne l'instance }
	}

	public function get_last(){
		$requete = $this->db->prepare("select * from individu ORDER BY id_individu asc limit 25");
		$requete->execute();
		return $requete->fetchAll(PDO::FETCH_ASSOC);
	}

	public function get_last2(){
		$requete = $this->db->prepare("select * from individu ORDER BY id_individu asc");
		$requete->execute();
		return $requete->fetchAll(PDO::FETCH_ASSOC);
	}

	public function get_nb_individus()
	{
		$requete = $this->db->prepare("SELECT COUNT(*) FROM individu");
		$requete->execute();
		$tab = $requete->fetch(PDO::FETCH_NUM);
		return $tab[0];

	}

	public function get_last_grp(){
		$requete = $this->db->prepare("select * from groupe");
		$requete->execute();
		return $requete->fetchAll(PDO::FETCH_ASSOC);
	}

	public function get_nb_grp()
	{
		$requete = $this->db->prepare("SELECT COUNT(*) FROM groupe");
		$requete->execute();
		$tab = $requete->fetch(PDO::FETCH_NUM);
		return $tab[0];

	}


	public function get_last_statut(){
		$requete = $this->db->prepare("select * from statut");
		$requete->execute();
		return $requete->fetchAll(PDO::FETCH_ASSOC);
	}

	public function get_nb_statut()
	{
		$requete = $this->db->prepare("SELECT COUNT(*) FROM statut");
		$requete->execute();
		$tab = $requete->fetch(PDO::FETCH_NUM);
		return $tab[0];

	}

	public function get_last_annuaire(){
		$requete = $this->db->prepare("select * from annuaire");
		$requete->execute();
		return $requete->fetchAll(PDO::FETCH_ASSOC);
	}

	public function get_nb_annuaire()
	{
		$requete = $this->db->prepare("SELECT COUNT(*) FROM annuaire");
		$requete->execute();
		$tab = $requete->fetch(PDO::FETCH_NUM);
		return $tab[0];

	}

	public function get_last_appartenir(){
        $requete = $this->db->prepare("SELECT * from appartenir a, individu i, groupe g  where a.id_individu = i.id_individu and a.id_groupe = g.id_groupe ");
        $requete->execute();
        return $requete->fetchAll(PDO::FETCH_ASSOC);
    }

	public function get_nb_appartenir()
	{
		$requete = $this->db->prepare("SELECT COUNT(*) FROM appartenir");
		$requete->execute();
		$tab = $requete->fetch(PDO::FETCH_NUM);
		return $tab[0];

	}

	public function get_individu_informations($i)
	{
		$requete = $this->db->prepare("SELECT * FROM individu where id_individu=:i");
		$requete->bindValue(':i', $i);
		$requete->execute();
		if (empty($requete)) {
			return false;
		}
		return $requete->fetch(PDO::FETCH_ASSOC);
	}

	public function get_individu_informations_groupe($i)
	{
		$requete = $this->db->prepare("SELECT * FROM Appartenir where id_individu=:i");
		$requete->bindValue(':i', $i);
		$requete->execute();
		if (empty($requete)) {
			return false;
		}
		return $requete->fetch(PDO::FETCH_ASSOC);
	}


	public function get_annuaire($i)
	{
		$requete = $this->db->prepare("SELECT * FROM annuaire where id_annuaire=:i");
		$requete->bindValue(':i', $i);
		$requete->execute();
		if (empty($requete)) {
			return false;
		}
		return $requete->fetch(PDO::FETCH_ASSOC);
	}

	public function get_groupe($i)
	{
		$requete = $this->db->prepare("SELECT * FROM groupe where id_groupe=:i");
		$requete->bindValue(':i', $i);
		$requete->execute();
		if (empty($requete)) {
			return false;
		}
		return $requete->fetch(PDO::FETCH_ASSOC);
	}

	public function get_statut($i)
	{
		$requete = $this->db->prepare("SELECT * FROM statut where id_statut=:i");
		$requete->bindValue(':i', $i);
		$requete->execute();
		if (empty($requete)) {
			return false;
		}
		return $requete->fetch(PDO::FETCH_ASSOC);
	}


	public function add_individu($infos)
	{
		$requete = $this->db->prepare("INSERT INTO individu VALUES (DEFAULT, :Nom,:Prenom,:email,:num,:id_annuaire,:id_statut)");

		$requete->bindValue(':Nom', $infos['Nom']);
		$requete->bindValue(':Prenom', $infos['Prenom']);
		$requete->bindValue(':email', $infos['email']);
		$requete->bindValue(':num', $infos['num']);
		$requete->bindValue(':id_annuaire', $infos['id_annuaire']);
		$requete->bindValue(':id_statut', $infos['id_statut']);
		$requete->execute();
	}

	public function add_grp($infos)
	{
		$requete = $this->db->prepare("INSERT INTO groupe VALUES (DEFAULT, :libelle)");

		$requete->bindValue(':libelle', $infos['libelle']);
		$requete->execute();
	}

	public function add_statut($infos)
	{
		$requete = $this->db->prepare("INSERT INTO statut VALUES (DEFAULT, :libelle)");

		$requete->bindValue(':libelle', $infos['libelle']);
		$requete->execute();
	}

	public function add_annuaire($infos)
	{
		$requete = $this->db->prepare("INSERT INTO annuaire VALUES (DEFAULT, :libelle)");

		$requete->bindValue(':libelle', $infos['libelle']);
		$requete->execute();
	}

	public function add_Appartenir($infos)
	{
		$requete = $this->db->prepare("INSERT INTO appartenir VALUES (:id_annee,:id_groupe,:id_individu)");

		$requete->bindValue(':id_annee', $infos['id_annee']);
		$requete->bindValue(':id_groupe', $infos['id_groupe']);
		$requete->bindValue(':id_individu', $infos['id_individu']);
		$requete->execute();
	}

	/*public function check_data()
	{
		if (trim($_POST['Nom'])!="" and trim($_POST['Prenom'])!="" and trim($_POST['email'])!="" and $_POST['num']>0 and $_POST['id_annuaire']>0 and $_POST['id_statut']>0 ){

			if (!isset($_POST['Nom']) or trim($_POST['Nom']) == "") {
				$_POST['Nom'] = null;
			}

			if (!isset($_POST['Prenom']) or trim($_POST['Prenom']) == "") {
				$_POST['Prenom'] = null;
			}

			if (!isset($_POST['email']) or trim($_POST['email']) == "") {
				$_POST['email'] = null;
			}
			if (!isset($_POST['num']) or trim($_POST['num']) == "") {
				$_POST['num'] = 0;
			}
			// foreach ($_POST as $key => $value) {
			// 	$infos[$key] = $value;
			// }
			return true;
		}
		else
		return false;

	}*/

	public function is_in_data_base_individu($i)
	{

		if (self::get_individu_informations($i)  == false) {
			return false;
		}
		else
		return true;
	}

	public function is_in_data_base_individu_groupe($i)
	{

		if (self::get_individu_informations_groupe($i)  == false) {
			return false;
		}
		else
		return true;
	}

	public function is_in_data_base_groupe($i)
	{

		if (self::get_groupe($i)  == false) {
			return false;
		}
		else
		return true;
	}


	public function is_in_data_base_statut($i)
	{

		if (self::get_statut($i)  == false) {
			return false;
		}
		else
		return true;
	}

	public function is_in_data_base_annuaire($i)
	{

		if (self::get_annuaire($i)  == false) {
			return false;
		}
		else
		return true;
	}

	public function remove_individu($i)
	{
		if (self::is_in_data_base_individu($i)) {
			$requete = $this->db->prepare("DELETE FROM individu WHERE id_individu=:i");
			$requete->bindValue(':i', $i);
			$requete->execute();
		}
	}

	public function remove_individu_groupe($i)
	{
		if (self::is_in_data_base_individu_groupe($i)) {
			$requete = $this->db->prepare("DELETE FROM Appartenir WHERE id_individu=:i");
			$requete->bindValue(':i', $i);
			$requete->execute();
		}
	}

	public function remove_statut($i)
	{
		if (self::is_in_data_base_statut($i)) {
			$requete = $this->db->prepare("DELETE FROM statut WHERE id_statut=:i");
			$requete->bindValue(':i', $i);
			$requete->execute();
		}
	}
	
	public function remove_groupe($i)
	{
		if (self::is_in_data_base_groupe($i)) {
			$requete = $this->db->prepare("DELETE FROM groupe WHERE id_groupe=:i");
			$requete->bindValue(':i', $i);
			$requete->execute();
		}
	}

	public function remove_annuaire($i)
	{
		if (self::is_in_data_base_annuaire($i)) {
			$requete = $this->db->prepare("DELETE FROM annuaire WHERE id_annuaire=:i");
			$requete->bindValue(':i', $i);
			$requete->execute();
		}
	}



	public function Update_data_base_individu($id,$nom, $prenom,$email,$num/* ,$id_annuaire,$id_statut*/)
	{
		// echo "id: " . $id . " ";
		// echo "nom: " . $nom . " ";
		// echo "prenom: " . $prenom . " ";
		// echo "email: " . $email . " ";
		// echo "num: " . $num . " ";

		try{
			$requete =
			 $this->db->prepare("UPDATE individu SET Nom=:nom,Prenom=:prenom,email=:email,num=:num/*,id_annuaire=:id_annuaire,id_statut=:id_statut*/ WHERE id_individu = :id");
			$requete->bindValue(':id', $id);
			$requete->bindValue(':nom', $nom);
			$requete->bindValue(':prenom', $prenom);
			$requete->bindValue(':email', $email);
			$requete->bindValue(':num', $num);
			//$requete->bindValue(':id_annuaire', $id_annuaire);
			//$requete->bindValue(':id_statut', $id_groupe);

			$requete->execute();
			return true;
		}
		catch (Exception $e) {
			return false;
		}
	}

	public function Update_data_base_individu2($id,$nom, $prenom,$email,$num,$id_annuaire,$id_statut)
	{
		try{
			$requete =
			 $this->db->prepare("UPDATE individu SET Nom=:nom,Prenom=:prenom,email=:email,num=:num,id_annuaire=:id_annuaire,id_statut=:id_statut WHERE id_individu = :id");
			$requete->bindValue(':id', $id);
			$requete->bindValue(':nom', $nom);
			$requete->bindValue(':prenom', $prenom);
			$requete->bindValue(':email', $email);
			$requete->bindValue(':num', $num);
			$requete->bindValue(':id_annuaire', $id_annuaire);
			$requete->bindValue(':id_statut', $id_groupe);

			$requete->execute();
			return true;
		}
		catch (Exception $e) {
			return false;
		}
	}

	public function Update_data_base_groupe($id,$libelle)
	{
		try{
			$requete = $this->db->prepare("UPDATE groupe SET libelle=:libelle WHERE id_groupe = :id");
			$requete->bindValue(':id', $id);
			$requete->bindValue(':libelle', $libelle);
			$requete->execute();
			return true;
		}
		catch (Exception $e) {
			return false;
		}
	}

	public function Update_data_base_statut($id,$libelle)
	{
		try{
			$requete = $this->db->prepare("UPDATE statut SET libelle=:libelle WHERE id_statut = :id");
			$requete->bindValue(':id', $id);
			$requete->bindValue(':libelle', $libelle);
			$requete->execute();
			return true;
		}
		catch (Exception $e) {
			return false;
		}
	}

	public function Update_data_base_annuaire($id,$libelle)
	{
		try{
			$requete = $this->db->prepare("UPDATE annuaire SET libelle=:libelle WHERE id_annuaire = :id");
			$requete->bindValue(':id', $id);
			$requete->bindValue(':libelle', $libelle);
			$requete->execute();
			return true;
		}
		catch (Exception $e) {
			return false;
		}
	}

	public function get_individu_with_limit($offset, $limit)
	{
		$requete = $this->db->prepare("SELECT * FROM individu ORDER BY id_individu asc LIMIT :lim OFFSET :offset");
		$requete->bindValue(':lim', $limit,PDO::PARAM_INT);
		$requete->bindValue(':offset', $offset,PDO::PARAM_INT);
		$requete->execute();
		return $requete->fetchAll(PDO::FETCH_ASSOC);
	}


	public function exportBy($i)
	{
		$x=$this->db->prepare("SELECT id_annee,libelle, Nom, Prenom from Appartenir a, Groupe g, Individu ind where a.id_groupe = g.id_groupe and a.id_individu=ind.id_individu and a.id_groupe=?");
		$x->execute(array($i));
		return $x;
	}

	public function check($i)
	{
		$x=$this->db->prepare("SELECT id_individu FROM Individu WHERE num = ?");
		$x->execute(array($i));
		return $x;
		//$prevResult = $db->query($prevQuery);
	}

	public function api()
	{
		//$requete = $this->db->prepare("SELECT * FROM Appartenir");
		$requete = $this->db->prepare("SELECT g.libelle, i.nom,i.prenom,i.email,i.num, an.libelle, s.libelle from Appartenir a, Groupe g, Individu i, annuaire an, statut s where a.id_individu=i.id_individu and a.id_groupe = g.id_groupe and i.id_statut=s.id_statut and i.id_annuaire=an.id_annuaire");
		//$requete->bindValue(':i', $i);
		$requete->execute();
		if (empty($requete)) {
			return false;
		}
		$x=$requete->fetchAll(PDO::FETCH_ASSOC);
		//print_r($x);
		echo json_encode($x,JSON_UNESCAPED_UNICODE);
	}
}


?>
