<?php

class Home extends CI_Controller{

	public function Index(){
		$data['titulo'] = 'Agenda';
		
		$this -> load -> view("Plantilla/header", $data);
		$this -> load -> view("Home/index");
		$this -> load -> view("Plantilla/footer");
	}
} 

?>