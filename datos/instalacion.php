<?php
include "conexion.php";

function crearBd(){
	$cnn=new conexion();
	$con = $cnn -> conectar();

	$sql = "CREATE DATABASE frmLogin";

	if (mysqli_query($con,$sql)){
		echo "consulta correcta";
	}
	mysqli_close($con);
}
//crearBd();
//180401E
//fecha justificacion editor descripcion
//180403154009 arroz con pollo C 1_2|3_1|4_0
//C=jefe E=subordinado
//2=uso 1=poco 0=nada
function crearTablas(){
	$cnn=new conexion();
	$con = $cnn -> conectar();
	mysqli_select_db($con, "frmLogin");
	$sql="CREATE TABLE usuarios(id INT(11) NOT NULL AUTO_INCREMENT, usuario CHAR(50), clave CHAR(50), PRIMARY KEY(id))";
	if (mysqli_query($con,$sql)){
		echo "se creo la tabla";
	}
	mysqli_close($con);
}
//crearTablas();

?>
