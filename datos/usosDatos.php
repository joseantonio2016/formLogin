<?php
//include "../entidades/usuarios.php";
//include "conexion.php";

class usosDatos{
	public static function recuperaUsos(){
		$arrayreturn=array();
		$mysqli = mysqli_connect("localhost", "root", "","dbkavale");
		if (mysqli_connect_errno($mysqli)){
			echo "Fallo la conexion a MySQL: ".mysqli_connect_error();
		}

		$sql = "SELECT nombreuso FROM usos ORDER BY fecha DESC LIMIT 10;";
		$result = mysqli_query($mysqli, $sql);
		$i=0;
		while ($fila = mysqli_fetch_array($result)) {
			$arrayreturn[$i]=$fila[0];
			$i++;
		 }
		mysqli_free_result($result);
		mysqli_close($mysqli);
		return $arrayreturn;
	}


	function insertarUsos($nombreuso,$descruso,$componentes,$editor,$observacion){
		$mysqli = mysqli_connect("localhost", "root", "","kavale");
		if (mysqli_connect_errno($mysqli)){
			echo "Fallo la conexion a MySQL: ".mysqli_connect_error();
		}

		$sql = sprintf("INSERT INTO usos(nombreuso,descripcuso, contenido, fecha, editornombre,observacion) VALUES('%s', '%s', '%s', '%s', '%s', '%s');",$nombreuso,$descruso,$componentes,$editor,$observacion);
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
		mysqli_close($mysqli);
		}


}




/*$po = "usosDatos"; 
//echo print_r($po::recuperaUsos());
foreach ($po::recuperaUsos() as $value) {
 	echo $value."<br>";
}
$obj = new usuariosDatos();
if ($obj->insertarUsuarios("jose", "gaby")){
		echo "lo hiciste bien";
	}
*/
?>
