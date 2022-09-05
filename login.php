<?php 
    include_once("./mysql_functions.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href= "assets/css/style.css">
    <link href="assets/todo/fontawesome-free/css/all.min.css" rel="stylesheet">
    <title>QATAR 2022 - Inicio de sesion</title>
    <link href="assets/img/QATAR 2022.png" rel="icon" type = "image/png">
</head>
<body style="background-image: url('assets/img/estadio.jpg');">
    <div class = "container-form sing-up" > 
        <div class = "welcome-back">
            <div class = "message"> <br>
            <h2>Albúm de figuritas digital QATAR 2022</h2>
            <P>Inicia sesión para coleccionar las figuritas y completar el albúm</P>
            </div>
        </div>
    </div>
<section class ="form-login">
<img src="assets/img/logo qatar.png" width= "160px" height= "40px"> <br> <br><br> 
    <form action= "./Login.php" method="POST">
        <label class = "labels" for ="nombre"> Nombre de usuario: </label>
        <input class= "controls" id = "pass2" type="text" name="nombre_de_usuario"  placeholder ="Ingrese usuario"> <br>
        <label class = "labels" for ="contrasenia"> Contraseña: </label>
        <input class = "controls" id = "pass" type="password" name="contrasenia"  placeholder ="Ingrese contraseña"> <br>
        <input class= "buttons" type="submit" value="INICIAR SESIÓN"><br> 
        <a href="./registro.php"><input type="submit" class= "buttons2" value="REGISTRARME"></a>

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
    </form>
</section>
</body>
</html>