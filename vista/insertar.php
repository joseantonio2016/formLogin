<?php
include "../controlador/usuariosControlador.php";

//con isset verificamos si existe el usuario o clave
if(isset($_GET["usuario"])||isset($_GET["pass"])){
    
    if (trim($_GET["usuario"])==""||trim($_GET["pass"])==""){
        echo "false";
    }
    else{
    
    $userCon = new usuariosControlador();
//vamos a pasar usuarios por medio de ajax $_GET["algo"]
if($userCon->insertarUsuarios($_GET["usuario"],$_GET["pass"])){
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

/*
//con isset verificamos si existe el usuario o clave
if(isset($_GET["usuarios"])||isset($_GET["pass"])){
    $userCon = new usuariosControlador();
//vamos a pasar usuarios por medio de ajax $_GET["algo"]
if($userCon->insertarUsuarios($_GET["usuario"],$_GET["pass"])){
    echo "verdad";
}else
{
    echo "falso";
}
}
else{
    echo "falso";
}
*/


?>