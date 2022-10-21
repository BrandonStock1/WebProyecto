<?php 
    include_once("../mysql_functions.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>QATAR 2022 - Registro de sesion</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="../assets/img/QATAR 2022.png" rel="icon" type = "image/png">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <link href="../assets/todo/principal/css/bs.min.css" rel="stylesheet">
  <link href="../assets/todo/icons/icons.css" rel="stylesheet">
  <link href="../assets/todo/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="../assets/todo/aos/aos.css" rel="stylesheet">
  <link href="../assets/todo/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/todo/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="../assets/css/registro.css" rel="stylesheet">
</head>

<body style="background-image: url('../assets/img/AlBayt.jpg');">

    <div class = "container-form sing-up">
        <div class = "welcome-back">
            <div class = "message"> <br>
            <h2>Albúm de figuritas digital <br>QATAR 2022</h2> 
            <P>Registrate para coleccionar las figuritas y completar el albúm</P>
            </div>
        </div>
    </div>

    <section class ="form-login">
        
        <img src="../assets/img/logo qatar.png" width= "200px" height= "50px"> <br> <br><br> <br>
        <br><br>
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
                        echo "<script>window.location.replace('../paginas/index.php')</script>";
                    }
                }
            }
            else {
                // echo " <p class='usuario'>Faltan datos </p>";
                echo "<script>document.getElementById('pass').classList.add('error')</script>";
                echo "<script>document.getElementById('pass2').classList.add('error')</script>";
                echo "<script>document.getElementById('pass3').classList.add('error')</script>";
            }
        ?>
        <input class = "buttons" type="submit" value="REGISTRARME">
        <a href="./login.php"><input type="submit" class= "buttons2" value="INICIAR SESION"></a>

    </form>

</section>

<div id="preloader"></div>

<script src="../assets/todo/principal/js/bs.bundle.min.js"></script>
<script src="../assets/todo/aos/aos.js"></script>
<script src="../assets/todo/glightbox/js/glightbox.min.js"></script>
<script src="../assets/todo/isotope-layout/isotope.pkgd.min.js"></script>
<script src="../assets/todo/swiper/swiper-bundle.min.js"></script>
<script src="../assets/todo/purecounter/purecounter_vanilla.js"></script>

<script src="../assets/js/main.js"></script>


</body>
</html>