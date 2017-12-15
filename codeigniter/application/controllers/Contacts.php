<?php

class contacts extends CI_Controller{

	function __construct(){
		parent:: __construct();
		$this -> load -> model('Model_contacts');
	}

	public function Index(){
		$data['titulo'] = 'Pagina Principal';
		$data['query'] = $this -> Model_contacts -> getAll();
		
		$this -> load -> view("Plantilla/header", $data);
		$this -> load -> view("Contacts/Index");
		$this -> load -> view("Plantilla/footer");
	}

	public function Add(){
		$data['titulo'] = 'Agregar nuevo contacto';

		$this -> load -> view("Plantilla/header", $data);
		$this -> load -> view("Contacts/Add");
		$this -> load -> view("Plantilla/footer");
	}


	public function AgregarContacto(){
		$this -> form_validation -> set_rules('nnombre','Nombre','required');
		$this -> form_validation -> set_rules('ndireccion','Direccion','required');
		$this -> form_validation -> set_rules('ntelefono','Telefono','required');

		if( $this -> form_validation -> run() == FALSE ){
			//Error
			$data['titulo'] = 'Agregar nuevo contacto';

			$this -> load -> view("Plantilla/header", $data);
			$this -> load -> view("Contacts/Add");
			$this -> load -> view("Plantilla/footer");
		}else{
			//ok
			$data = array(
				'Nombre' => $this -> input -> post('nnombre'),
				'Direccion' => $this -> input -> post('ndireccion'),
				'Telefono' => $this -> input -> post('ntelefono')
			);

			$this -> Model_contacts -> insert($data);

			redirect( base_url() . 'Contacts/' );
		}
	}
}

?>