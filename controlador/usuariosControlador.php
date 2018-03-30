<?php
include "../datos/usuariosDatos.php";

class usuariosControlador{
function insertarUsuarios($user, $pass){
	$obj=new usuariosDatos();
	return $obj->insertarUsuarios($user,$pass);
}

    function validar($user,$pass){
        $obj=new usuariosDatos();
        return $obj->validar($user,$pass);
    }
}
?>