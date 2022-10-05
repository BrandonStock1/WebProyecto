<?php

include('conexion.php');

if(isset($_POST['usuario']) && isset($_POST['pass'])) {
    $usuario = $_POST['usuario'];
    $pass = $_POST['pass'];

    $consultaSql = "SELECT usuario,pass FROM usuarios WHERE usuario ='$usuario' AND pass ='$pass'";

    $result = $conexion -> query($consultaSql);

    if($result -> nums_rows > 0){
        echo "existe";
    } else{
        echo "no existe";
    }
}

sleep(3);

?>