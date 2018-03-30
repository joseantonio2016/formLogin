<?php
class conexion{
	function conectar(){
		return mysqli_connect("localhost","prueba","tadi");
	}
}
/*
$cnn = new conexion();
if ($cnn->conectar()){
	echo "conectado";
}else{
	echo "desconectado";
}*/
?>