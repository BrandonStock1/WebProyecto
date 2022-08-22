<?php 
    include_once("./mysql_functions.php");
?>
</head>
<meta charset="UTF-8">
<link rel="stylesheet" href= "registro.css">
    <title>Registro</title>
<body>
<div class = "container-form sing-up">
        <div class = "welcome-back">
            <div class = "message">
            <h2>Albúm de figuritas digital QATAR 2022</h2> 
            <P>Regístrese y comience su experiencia coleccionando las figuritas del mundial QATAR 2022</P>
            </div>
        </div>
    </div>
<section class ="form-registro">
<img src="logo qatar.png" width= "160px" height= "40px"> <br> <br><br>
    <form action= "./Registro.php" method="POST">
        <label for ="nombre"> Nombre de usuario: </label>
        <input class= "controls" id= "pass" type="text" name="nombre_de_usuario"  placeholder ="Ingrese usuario"> <br>
        <label for ="mail"> Mail: </label>
        <input class = "controls" id = "pass2" type="email" name="mail"  placeholder ="Ingrese mail"> <br>
        <label for ="contrasenia"> Contraseña: </label>
        <input class = "controls" id = "pass3" type="password" name="contrasenia"  placeholder ="Ingrese contraseña"> <br>
        <?php
            if($_POST["nombre_de_usuario"] != "" || $_POST["mail"] != "" && $_POST["contrasenia"] != ""){
                $query = "SELECT * FROM usuario where nombre_de_usuario  = ?";
                $result = DB::getInstance()->query($query, array($_POST["nombre_de_usuario"]));
                if($result->count() != 0){
                    echo "<p class='usuario'>Este usuario ya existe</p>";
                    echo "<script>document.getElementById('pass').classList.add('error')</script>";
                }
                else {

                    $query = "SELECT * FROM usuario where mail  = ?";
                     $result = DB::getInstance()->query($query, array($_POST["mail"]));
                      if($result->count() != 0){
                    echo "<p class='usuario'>Este mail ya existe</p>";
                    echo "<script>document.getElementById('pass2').classList.add('error')</script>";
                }

                else {

                    $query = "INSERT INTO usuario (nombre_de_usuario, mail, contrasenia) Values (?, ?, ?) ";
                    $result = DB::getInstance()->query($query, array($_POST["nombre_de_usuario"], $_POST["mail"], $_POST["contrasenia"]));
                    //echo "<script>window.location.replace('./')</script>";
                }
            }
        }

            else {
                echo " <p class='usuario'>Faltan datos </p>";
                echo "<script>document.getElementById('pass').classList.add('error')</script>";
                echo "<script>document.getElementById('pass2').classList.add('error')</script>";
                echo "<script>document.getElementById('pass3').classList.add('error')</script>";
            }
        ?>
        <input class = "buttons" type="submit" value="REGISTRARME">
    </form>
</section>
</body>
</html>