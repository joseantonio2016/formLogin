<?php
include "../datos/itemsAlacena.php";

class itemsControlador{
function recuperaItems(){
	$obj=new itemsAlacena();
	return $obj->recuperaItems();
}
}
?>