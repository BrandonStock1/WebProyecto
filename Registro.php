<?php 
    include_once("./mysql_functions.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>QATAR 2022 - Registro</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo-qatar-1.png" rel="icon" type = "image/png">
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

      <a href="Registro.php" class="logo d-flex align-items-center">
        <img src="assets/img/logo-qatar-1.png">
        <h1>QATAR 2022<span>.</span></h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="Login.php">Inicio de sesion</a></li>
          <li><a href="Registro.php" class="active" >Registro</a></li>
  </header>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">

    <div class="info d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h2 data-aos="fade-down">Registro <br> Album digital de <span>QATAR 2022</span></h2>
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
              <h3>Registro</h3>
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

    
    <main id="main">

<!-- ======= Alt Services Section ======= -->
  <section id="alt-tienda" class="alt-tienda">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-around gy-4">
        <div class="col-lg-6 img-bg" style="background-image: url(assets/img/ventajas-picc.jpg);" data-aos="zoom-in" data-aos-delay="100"></div>

        <div class="col-lg-5 d-flex flex-column justify-content-center">
          <h3>Ventajas de este proyecto</h3>

          <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
            <i class="bi bi-easel flex-shrink-0"></i>
            <div>
              <h4><a href="" class="stretched-link">Ecologico</a></h4>
              <p>No contamina el planeta ya que en vez de utilizar papel para producir las figuritas, es todo online!!</p>
            </div>
          </div><!-- End Icon Box -->

          <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
            <i class="bi bi-patch-check flex-shrink-0"></i>
            <div>
              <h4><a href="" class="stretched-link">Rápido</a></h4>
              <p>Es más fácil tanto comprar sobres, como buscar las figuritas que necesitas!</p>
            </div>
          </div><!-- End Icon Box -->

          <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
            <i class="bi bi-brightness-high flex-shrink-0"></i>
            <div>
              <h4><a href="" class="stretched-link">Seguro</a></h4>
              <p>No pueden robarte las figuritas como en nuestra infancia...</p>
            </div>
          </div><!-- End Icon Box -->

          <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
            <i class="bi bi-brightness-high flex-shrink-0"></i>
            <div>
              <h4><a href="" class="stretched-link">Divertido</a></h4>
              <p>Actualmente todo es online y es mas facil adapatarse y divertirse!</p>
            </div>
          </div><!-- End Icon Box -->

        </div>
      </div>

    </div>
  </section><!-- End Alt Services Section -->
  

  <!-- ======= Our Projects Section ======= -->
  <section id="intercambio" class="intercambio">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>El proceso</h2>
        <p>Dejaremos unas imagenes para describir nuestro trabajo a traves del tiempo...</p>
      </div>

      <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

        <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">Todas</li>
          <li data-filter=".filter-Agosto">Agosto</li>
          <li data-filter=".filter-Septiembre">Septiembre</li>
          <li data-filter=".filter-Octubre">Octubre</li>
          <li data-filter=".filter-Noviembre">Noviembre</li>
        </ul><!-- End Projects Filters -->

        <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-Agosto">
            <div class="portfolio-content h-100">
              <img src="assets/img/brandonlab1.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <a href="assets/img/brandonlab1.jpeg" data-gallery="portfolio-gallery-Agosto" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div>
          </div><!-- End Projects Item -->

          <div class="col-lg-4 col-md-6 portfolio-item filter-Agosto">
            <div class="portfolio-content h-100">
              <img src="assets/img/laralab1.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <a href="assets/img/laralab1.jpeg" data-gallery="portfolio-gallery-Agosto" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div>
          </div><!-- End Projects Item -->
        </div><!-- End Projects Container -->

      </div>

    </div>
  </section><!-- End Our Projects Section -->

<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Nosotros</h2>
          <p>Los participantes de este proyecto de ORT 2022</p>
        </div>

        <div class="slides-2 swiper">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/brandon.jpeg" class="testimonial-img" alt="">
                  <h3>Brandon Stock</h3>
                  <h4>Web creator</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    ...
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/juani.jpeg" class="testimonial-img" alt="">
                  <h3>Juan Ignacio Cama</h3>
                  <h4>Programador</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    ...
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/sasha.jpeg" class="testimonial-img" alt="">
                  <h3>Sasha Cattaneo</h3>
                  <h4>Games producer</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    ...
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/gaston2.jpeg" class="testimonial-img" alt="">
                  <h3>Gastón Edelberg</h3>
                  <h4>Blockchain producer</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    ...
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/lara.jpeg" class="testimonial-img" alt="">
                  <h3>Lara Genovese</h3>
                  <h4>Diseñadora</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    ...
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->


  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>