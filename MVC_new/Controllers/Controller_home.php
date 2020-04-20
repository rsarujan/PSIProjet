<?php
class Controller_home extends Controller
{

	public function action_default(){
		$this->action_home();
	}

	public function action_home(){
		$m = Model::get_model();
		$data =['nb' => $m->get_nb_individus()];
		$this->render('home',$data);

	}
}
?>
