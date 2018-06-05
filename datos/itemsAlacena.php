<?php 
include "../entidades/Existencias.php";

class itemsAlacena{
	function recuperaItems(){
		$arrayreturn;
		$mysqli = mysqli_connect("localhost", "root", "","dbkavale");
		if (mysqli_connect_errno($mysqli)){
			echo "Fallo la conexion a MySQL: ".mysqli_connect_error();
		}

		$sql = "SELECT * FROM existencias WHERE condicion > 0";
		$result = mysqli_query($mysqli, $sql);
		$i=0;	
		while ($fila = mysqli_fetch_array($result)) {
			$item = new Existencias($fila[0],$fila[1],$fila[2],$fila[3],$fila[4],$fila[5],$fila[6]);
			$arrayreturn[$i]=$item;
			$i++;
		 }
		mysqli_free_result($result);
		mysqli_close($mysqli);
		return $arrayreturn;
	}


}

 ?>
