<?php
session_start();
if (isset($_SESSION["usuario"]) && isset($_SESSION["pass"])){
    echo "hola bienvenido<br>";
    echo "<a href='cerrarsesion.php'>Cerrar sesión</a>";
}
else{
    echo "<meta http-equiv='refresh' content='0;url=index.php'>";
}

?>