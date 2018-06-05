<?php  
class Existencias{
	public $id;
	public $nombex;
	public $descrex;
	public $cantidad;
	public $ultimarepo;
	public $ultimouso;
	public $observacion;
	function get_id(){
		return $this->id;
	}
	function set_id($id){
		$this->id=$id;
	}
	function get_nombex(){
		return $this->nombex;
	}
	function set_nombex($nombex){
		$this->nombex=$nombex;
	}
	function get_descrex(){
		return $this->descrex;
	}
	function set_descrex($descrex){
		$this->descrex=$descrex;
	}
	function get_cantidad(){
		return $this->cantidad;
	}
	function set_cantidad($cantidad){
		$this->cantidad=$cantidad;
	}
	
	function get_ultimarepo(){
		return $this->ultimarepo;
	}
	function set_ultimarepo($ultimarepo){
		$this->ultimarepo=$ultimarepo;
	}
	function get_ultimouso(){
		return $this->ultimouso;
	}
	function set_ultimouso($ultimouso){
		$this->ultimouso=$ultimouso;
	}
	function get_observacion(){
		return $this->observacion;
	}
	function set_observacion($observacion){
		$this->observacion=$observacion;
	}
	public function __construct($id, $nombex, $descrex, $cantidad, $ultimarepo, $ultimouso, $observacion) {
		$this->id=$id;
       $this->nombex = $nombex;
       $this->descrex = $descrex;
       $this->cantidad = $cantidad;
       $this->ultimarepo=$ultimarepo;
       $this->ultimouso=$ultimouso;
       $this->observacion=$observacion;
    }
    public function __destruct() {
       
    }


}

?>