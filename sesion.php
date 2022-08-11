<?php 
    include_once("./mysql_functions.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>QATAR 2022 - Home</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: UpConstruction - v1.1.0
  * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/logo-qatar-1.png">
        <h1>QATAR 2022<span>.</span></h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php" class="active" >Home (Album)</a></li>
          <li><a href="about.html">Minijuegos</a></li>
          <li><a href="services.html">Tienda</a></li>
          <li><a href="projects.html">Intercambio</a></li>
          <li class="dropdown"><a href="#"><span>Coleccion</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Todas</a></li>
              <li class="dropdown"><a href="#"><span>Paises</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>

                  <li><a href="#">Escudos</a></li>

                  <li class="dropdown"><a href="#"><span>Europa</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                      <li><a href="#">Alemania</a></li>
                      <li><a href="#">Belgica</a></li>
                      <li><a href="#">Croacia</a></li>
                      <li><a href="#">Dinamarca</a></li>
                      <li><a href="#">España</a></li>
                      <li><a href="#">Francia</a></li>
                      <li><a href="#">Gales</a></li>
                      <li><a href="#">Holanda</a></li>
                      <li><a href="#">Inglaterra</a></li>
                      <li><a href="#">Portugal</a></li>
                      <li><a href="#">Polonia</a></li>
                      <li><a href="#">Serbia</a></li>
                      <li><a href="#">Suiza</a></li>
                    </ul>

                  <li class="dropdown"><a href="#"><span>America</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                      <li><a href="#">Argentina</a></li>
                      <li><a href="#">Brasil</a></li>
                      <li><a href="#">Canada</a></li>
                      <li><a href="#">Costa Rica</a></li>
                      <li><a href="#">Ecuador</a></li>
                      <li><a href="#">Estados Unidos</a></li>
                      <li><a href="#">Mexico</a></li>
                      <li><a href="#">Uruguay</a></li>
                    </ul>
                 
                  <li class="dropdown"><a href="#"><span>Asia</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                      <li><a href="#">Arabia Saudita</a></li>
                      <li><a href="#">Corea del Sur</a></li>
                      <li><a href="#">Iran</a></li>
                      <li><a href="#">Japon</a></li>
                      <li><a href="#">Tunez</a></li>
                    </ul>

                  <li class="dropdown"><a href="#"><span>Africa</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                      <li><a href="#">Camerun</a></li>
                      <li><a href="#">Ghana</a></li>
                      <li><a href="#">Marruecos</a></li>
                      <li><a href="#">Senegal</a></li>
                    </ul>

                  <li class="dropdown"><a href="#"><span>Oceania</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                      <li><a href="#">Australia</a></li>
                    </ul>
                </ul>
              <li><a href="#">Estadios</a></li>
              <li><a href="#">Objetos</a></li>
              <li><a href="#">Brillantes</a></li>
            </ul>
          </li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
      </nav>

    </div>
  </header>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">

    <div class="info d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h2 data-aos="fade-down">Bienvenido al album de <span>QATAR 2022</span></h2>
            <p data-aos="fade-up">En esta página web vas a poder coleccionar las figuiritas del mundial QATAR 2022 de forma digital, pero para poder conseguir figuritas vas a necesitar jugar una serie de minijuegos con los que podras conseguir moneditas que servirán para comprar los paquetes de figuritas</p>
            <a data-aos="fade-up" data-aos-delay="200" href="#get-started" class="btn-get-started">Comenzar</a>
          </div>
        </div>
      </div>
    </div>

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

      <div class="carousel-item active" style="background-image: url(assets/img/index-pg1.png)"></div>
      <div class="carousel-item" style="background-image: url(assets/img/index-pg2.png)"></div>
      <div class="carousel-item" style="background-image: url(assets/img/index-pg3.png)"></div>

      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

  </section>

  <main id="main">

    <!-- ======= Get Started Section ======= -->
    <section id="get-started" class="get-started section-bg">
      <div class="container">

        <div class="row justify-content-between gy-4">

          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up">
            <div class="content">
              <h3>Comienza tu experiencia coleccionando figuritas online!</h3>
              <p>Este proyecto es un álbum de figuritas online, con diferentes cosas para hacer, para que de esta forma sea mas entretenido e interactivo. Esperamos que les guste!</p>
            </div>
          </div>

          <div class="col-lg-5" data-aos="fade">
            <form action="forms/quote.php" method="post" class="php-email-form">
              <h3>Inicio de sesión</h3>
              <div class="row gy-3">

                <div class="col-md-12">
                  <input type="text" name="name" class="form-control" placeholder="Nombre/Usuario" required>
                </div>

                <div class="col-md-12">
                  <input type="password" class="form-control" name="password" placeholder="Contraseña" required>
                </div>

                <?php 
        if(isset($_POST["nombre_de_usuario"])){
            if($_POST["nombre_de_usuario"] != "" &&  $_POST["contrasenia"] != ""){
                $query = "SELECT * FROM usuario WHERE nombre_de_usuario = ?";
                $result = DB::getInstance()->query($query, array($_POST["nombre_de_usuario"]),array($_POST["contrasenia"]));
                if($result->count() != 0){
                    foreach($result->results() as $fila){
                        if($_POST["contrasenia"] != $fila->contrasenia){
                            echo " <p class='usuario_1'> La Contraseña es incorrecta </p>";
                        }
                        else{
                            echo "<p class='usuario_2'>Inicio sesion correctamente </p>";
                            echo "<script>window.location.replace('./')</script>";
                        }
                    }
                } else {
                    echo "<p class='usuario_1'>No existe ese usuario, intente con otro nombre de usuario o regístrese </p>";
                }
            } else {
                echo " <p class='usuario_1'>Faltan datos </p>";
            }
        }
?>
                <p class="no_tengo_cuenta"><a href="./Registro.php">No tengo una cuenta</a> </p> <br> <br>

                <div class="col-md-12 text-center">
                  <div class="loading">Cargando...</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Te has inscripto en el album QATAR 2022.</div>

                  <button type="submit">Iniciar sesión</button>
                </div>

              </div>
            </form>
          </div><!-- End Quote Form -->

        </div>

      </div>
    </section><!-- End Get Started Section -->

    </body>
    </html>