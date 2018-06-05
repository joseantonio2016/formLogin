<?php
include "../controlador/usosControlador.php";


    
    $itemCon = new usosControlador();
//vamos a pasar usuarios por medio de ajax $_GET["algo"]  insertarUsos($nombreuso,$descruso,$componentes,$editor,$observacion){
$result = '';
foreach ($itemCon->recuperaUsos() as $value) {
	$result.='<option value="'.$value.'">';
}
echo $result;



?>