<?php
include "../entidades/usuarios.php";
include "conexion.php";

class usuariosDatos{
	function insertarUsuarios($user,$pass){
		//$cnn = new conexion();
		//$con = $cnn->conectar();

		$usuarios = new usuarios();
		//$usuarios->usuario=$user;
		//$usuarios->clave=$pass;
		//mysqli_select_db($con,"frmLogin");
		$mysqli = mysqli_connect("localhost", "prueba", "tadi","frmlogin");
		if (mysqli_connect_errno($mysqli)){
			echo "Fallo la conexion a MySQL: ".mysqli_connect_error();
		}
		$usuarios->usuario=mysqli_real_escape_string($mysqli,$user);
		$usuarios->clave=password_hash($pass,PASSWORD_DEFAULT);
		//$sql="INSERT INTO usuarios(usuario,clave) VALUES('".$usuarios->usuario."','".$usuarios->clave."');";
		$sql = sprintf("INSERT INTO usuarios(usuario,clave) VALUES('%s', '%s');", 
									$usuarios->usuario,$usuarios->clave);
		if(mysqli_query($mysqli,$sql)){
			return true;
		}
		else{
			return false;
		}
		mysqli_close($mysqli);
		//mysqli_close($conn);
	}

    function validar($user,$pass){
  	//$cnn = new conexion();
		//$con = $cnn->conectar();

		$usuarios = new usuarios();
		$usuarios->usuario=$user;
		$usuarios->clave=$pass;
		$mysqli = mysqli_connect("localhost", "prueba", "tadi","frmlogin");
		//mysqli_select_db($con,"frmLogin");
    //$sql="SELECT * FROM usuarios WHERE usuario='".$usuarios->usuario."' and clave='".$usuarios->clave."'";
		$sql=sprintf("SELECT clave FROM usuarios WHERE usuario='%s'",$usuarios->usuario);
    //$consulta=mysqli_query($mysqli, $sql);
    //$fila = mysqli_fetch_array($consulta);
		$fila = mysqli_fetch_assoc(mysqli_query($mysqli, $sql));
		if($fila>0){
        //if ($fila["usuario"]==$usuarios->usuario && $fila["clave"]==$usuarios->clave){

					if (password_verify($pass, $fila['clave'])){
	            return true;
	        }else{
						return false;
					}

    }else{
        return false;
    }
		/*
    if($fila>0){
        //if ($fila["usuario"]==$usuarios->usuario && $fila["clave"]==$usuarios->clave){
				if ($fila["usuario"]==$usuarios->usuario && password_verify($usuarios->clave, $fila['clave'])){
            return true;
        }
    }else{
        return false;
    }
		*/
		mysqli_close($mysqli);
		}


}



/*
$obj = new usuariosDatos();
if ($obj->insertarUsuarios("jose", "gaby")){
		echo "lo hiciste bien";
	}
*/
?>
