<?php
include "../controlador/usosControlador.php";

//con isset verificamos si existe el usuario o clave
if(isset($_GET["usuario"])||isset($_GET["pass"])){
    
    if (trim($_GET["usuario"])==""||trim($_GET["pass"])==""){
        echo "false";
    }
    else{
    
    $userCon = new usosControlador();
//vamos a pasar usuarios por medio de ajax $_GET["algo"] insertarUsos($nombreuso,$descruso,$componentes,$editor,$observacion){
if($userCon->insertarUsos($_GET["nombreuso"],$_GET["descruso"])){
    echo "true";
}else
{
    echo "false";
}
}
}
else{
    echo "false";
}


?>