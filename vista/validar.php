<?php
include "../controlador/usuariosControlador.php";

//con isset verificamos si existe el usuario o clave
if(isset($_POST["usuario"])||isset($_POST["pass"])){
    
    if (trim($_POST["usuario"])==""||trim($_POST["pass"])==""){
        echo "false";
    }
    else{
    
    $userCon = new usuariosControlador();
//vamos a pasar usuarios por medio de ajax $_POST["algo"]
if($userCon->validar($_POST["usuario"],$_POST["pass"])){
    session_start();
    $_SESSION["usuario"]=$_POST["usuario"];
    $_SESSION["pass"]=$_POST["pass"];
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
if(isset($_GET["usuario"])||isset($_GET["pass"])){
    
    if (trim($_GET["usuario"])==""||trim($_GET["pass"])==""){
        echo "false";
    }
    else{
    
    $userCon = new usuariosControlador();
//vamos a pasar usuarios por medio de ajax $_GET["algo"]
if($userCon->validar($_GET["usuario"],$_GET["pass"])){
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
*/

?>