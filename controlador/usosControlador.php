<?php
include "../datos/usosDatos.php";

class usosControlador{
function insertarUsos($nombreuso,$descruso,$componentes,$editor,$observacion){
	$obj=new usosDatos();
	return $obj->insertarUsos($nombreuso,$descruso,$componentes,$editor,$observacion);
}

function recuperaUsos(){
	$obj="usosDatos";
	return $obj::recuperaUsos();
}

    // function validarUsos($user,$pass){
    //     $obj=new usuariosDatos();
    //     return $obj->validar($user,$pass);
    // }
}
?>