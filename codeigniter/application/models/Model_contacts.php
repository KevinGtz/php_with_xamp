<?php

class Model_contacts extends CI_Model{

	public function insert($data){
		$this -> db -> insert("contactos",$data);
	}

	public function getAll(){
		$query = $this -> db -> get("contactos");
		return  $query -> result();
	}

}

?>