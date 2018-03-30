<?php

class usuarios{
	
	public $id;
	function get_id(){
		return $this->id;
	}
	function set_id($id){
		$this->id=$id;
	}
	public $usuario;
	function get_usuario(){
		return $this->usuario;
	}
	function set_usuario($usuario){
		$this->usuario=$usuario;
	}
	public $clave;
	function get_clave(){
		return $this->clave;
	}
	function set_clave($clave){
		$this->clave=$clave;
	}
	
}
?>