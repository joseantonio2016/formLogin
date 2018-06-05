<?php  
class Usos{
	public $iduso;
	public $nombuso;
	public $descriuso;
	public $contenido;
	public $fecha;
	public $editor;
	public $observacion;
	function get_iduso(){
		return $this->iduso;
	}
	function set_iduso($iduso){
		$this->iduso=$iduso;
	}
	function get_nombuso(){
		return $this->nombuso;
	}
	function set_nombex($nombuso){
		$this->nombuso=$nombuso;
	}
	function get_descriuso(){
		return $this->descriuso;
	}
	function set_descriuso($descriuso){
		$this->descriuso=$descriuso;
	}
	function get_contenido(){
		return $this->contenido;
	}
	function set_contenido($contenido){
		$this->contenido=$contenido;
	}
	
	function get_fecha(){
		return $this->fecha;
	}
	function set_fecha($fecha){
		$this->fecha=$fecha;
	}
	function get_editor(){
		return $this->editor;
	}
	function set_editor($editor){
		$this->editor=$editor;
	}
	function get_observacion(){
		return $this->observacion;
	}
	function set_observacion($observacion){
		$this->observacion=$observacion;
	}
	public function __construct($iduso, $nombuso, $descriuso, $contenido, $fecha, $editor, $observacion) {
		$this->iduso=$iduso;
       $this->nombuso = $nombuso;
       $this->descriuso= $descriuso;
       $this->contenido = $contenido;
       $this->fecha=$fecha;
       $this->editor=$editor;
       $this->observacion=$observacion;
    }
    public function __destruct() {
       
    }


}

?>