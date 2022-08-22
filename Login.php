<?php 
    include_once("./mysql_functions.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href= "style.css">
    <title>Inicio de sesion</title>
</head>
<body>
    <div class = "container-form sing-up">
        <div class = "welcome-back">
            <div class = "message">
            <h2>Albúm de figuritas digital QATAR 2022</h2> 
            <P>Inicia sesión para coleccionar las figuritas y completar el albúm</P>
            </div>
        </div>
    </div>
<section class ="form-login">
<img src="logo qatar.png" width= "160px" height= "40px"> <br> <br><br>
    <form action= "./Login.php" method="POST">
        <label class = "labels" for ="nombre"> Nombre de usuario: </label>
        <input class= "controls" id = "pass2" type="text" name="nombre_de_usuario"  placeholder ="Ingrese usuario"> <br>
        <label class = "labels" for ="contrasenia"> Contraseña: </label>
        <input class = "controls" id = "pass" type="password" name="contrasenia"  placeholder ="Ingrese contraseña"> <br>
        <?php 
        if(isset($_POST["nombre_de_usuario"])){
            if($_POST["nombre_de_usuario"] != "" &&  $_POST["contrasenia"] != ""){
                $query = "SELECT * FROM usuario WHERE nombre_de_usuario = ?";
                $result = DB::getInstance()->query($query, array($_POST["nombre_de_usuario"]),array($_POST["contrasenia"]));
                if($result->count() != 0){
                    foreach($result->results() as $fila){
                        if($_POST["contrasenia"] != $fila->contrasenia){
                            echo " <p class='usuario_1'> La Contraseña es incorrecta </p>";
                            echo "<script>document.getElementById('pass').classList.add('error')</script>";
                        }
                        else{
                            echo "<script>window.location.replace('./')</script>";
                        }
                    }
                } else {
                    echo "<p class='usuario_1'>No existe ese usuario, intente con otro nombre de usuario o regístrese </p>";
                    echo "<script>document.getElementById('pass2').classList.add('error')</script>";
                }
            } else {
                echo " <p class='usuario_1'>Faltan datos </p>";
                echo "<script>document.getElementById('pass').classList.add('error')</script>";
                echo "<script>document.getElementById('pass2').classList.add('error')</script>";
            }
        }
?>
        <input class= "buttons" type="submit" value="INICIAR SESIÓN"><br> 
        <a href="./registro.php"><input type="submit" class= "buttons2" value="REGISTRARME"></a>
    </form>
</section>
</body>
</html>