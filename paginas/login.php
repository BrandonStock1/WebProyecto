<?php 
    include_once("./mysql_functions.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>QATAR 2022 - Inicio de sesion</title>
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

  <link href="../assets/css/style.css" rel="stylesheet">
</head>
    
<body style="background-image: url(../assets/img/AlBayt.jpg)">

    <div class = "container-form sing-up"> 
        <div class = "welcome-back">
            <div class = "message"> <br>
            <h2>Albúm de figuritas digital <br>QATAR 2022</h2>
            <P>Inicia sesión para coleccionar las figuritas y completar el albúm</P>
            </div>
        </div>
    </div>

    <section class ="form-login">
        
        <img src="../assets/img/logo qatar.png" width= "200px" height= "50px"> <br> <br><br><br><br><br><br>
        <br><br>
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
                                echo "<script>window.location.replace('../paginas/index.html')</script>";
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