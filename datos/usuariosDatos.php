<?php
include "../entidades/usuarios.php";
include "conexion.php";

class usuariosDatos{
	function insertarUsuarios($user,$pass){
		$cnn = new conexion();
		$con = $cnn->conectar();
		
		$usuarios = new usuarios();
		$usuarios->usuario=$user;
		$usuarios->clave=$pass;
		mysqli_select_db($con,"frmLogin");
		$sql="INSERT INTO usuarios(usuario,clave) VALUES('".$usuarios->usuario."','".$usuarios->clave."')";
		if(mysqli_query($con,$sql)){
			return true;
		}
		else{
			return false;
		}
		mysqli_close($con);
	}
    
    function validar($user,$pass){
    $cnn = new conexion();
		$con = $cnn->conectar();
		
		$usuarios = new usuarios();
		$usuarios->usuario=$user;
		$usuarios->clave=$pass;
		mysqli_select_db($con,"frmLogin");
    $sql="SELECT * FROM usuarios WHERE usuario='".$usuarios->usuario."' and clave='".$usuarios->clave."'";
    $consulta=mysqli_query($con, $sql);
    $fila = mysqli_fetch_array($consulta);
    if($fila>0){
        if ($fila["usuario"]==$usuarios->usuario && $fila["clave"]==$usuarios->clave){
            return true;
        }
    }else{
        return false;
    }
}
    
    
}



/*
$obj = new usuariosDatos();
if ($obj->insertarUsuarios("jose", "gaby")){
		echo "lo hiciste bien";
	}
*/
?>