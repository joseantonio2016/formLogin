<?php
include "../controlador/itemsControlador.php";


    
    $itemCon = new itemsControlador();
//vamos a pasar usuarios por medio de ajax $_GET["algo"]  insertarUsos($nombreuso,$descruso,$componentes,$editor,$observacion){
$result = '';
foreach ($itemCon->recuperaItems() as $value) {
	$result.='<option value="'.$value->get_nombex().'">';
}
echo $result;



?>