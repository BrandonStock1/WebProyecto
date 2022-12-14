<?php 
    include_once("../mysql_functions.php");
    session_start();
    if (!isset ($_SESSION ["username"])){
      echo "<script>window.location.replace('./login.php')</script>";
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>QATAR 2022 - Contact</title>
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

  <link href="../assets/css/main.css" rel="stylesheet">

</head>

<body>

  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="../paginas/index.php" class="logo d-flex align-items-center">
        <h1>QATAR 2022<span>.</span></h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="../paginas/index.php">Home</a></li>
          <li><a href="../paginas/minijuegos.php">Minijuegos</a></li>
          <li><a href="../paginas/tienda.php">Tienda</a></li>
          <li><a href="../paginas/intercambio.php">Intercambio</a></li>
          <li><a href="../paginas/contact.php" class="active" >Contact</a></li>
          <li><a href="../pack/PRES/copa.php">Album</a></li>
          <li><a href="../paginas/sesion.php"><i class="bi bi-person-fill flex-shrink-0" style= "font-size: 17px"></i> - <?php echo $_SESSION["username"];?> </a></li>
        </ul>
      </nav>

    </div>
  </header>

  <main id="main">

    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('../assets/img/copa-base.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Contact</h2>
        <ol>
          <li><a href="../paginas/index.php">Home</a></li>
          <li>Contact</li>
        </ol>

      </div>
    </div>

    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-6">
            <div class="info-item  d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-map"></i>
              <h3>Direcci??n</h3>
              <p>Av. del Libertador 6796, C1429 CABA</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-envelope"></i>
              <h3>Email</h3>
              <p>qatar2022team@est.ort.edu.ar</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-item  d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-telephone"></i>
              <h3>Call Us</h3>
              <p>+54 911 0000 0000</p>
            </div>
          </div>
        </div>
        
        <div class="row gy-4 mt-1">
          <div class="col-lg-6 ">
            <div class="map-responsive">
              <iframe style="border: 0;" tabindex="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3286.1493463651827!2d-58.45634658519721!3d-34.549773862152044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb42f9ed308c9%3A0xcd4d8e2268209306!2sEscuela%20ORT%20sede%20Belgrano!5e0!3m2!1ses!2sar!4v1659998736657!5m2!1ses!2sar" width="1300" height="600" frameborder="0" allowfullscreen="allowfullscreen" aria-hidden="false"></iframe>
            </div>
          </div>
        </div>

    </section>

  </main>

  <footer id="footer" class="footer">

    <div class="footer-content position-relative">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>QATAR 2022</h3>
              <p>
                Av. del libertador 6796 <br>
                C1429 CABA, Argentina <br><br>
                <strong>Tel??fono:</strong> +54 911 0000 0000 <br>
                <strong>Email:</strong> qatar2022team@est.ort.edu.ar <br>
              </p>
              <div class="social-links d-flex mt-3">
                <a href="https://www.instagram.com/" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
                <a href="https://www.twitter.com/" class="d-flex align-items-center justify-content-center"><i class="bi bi-twitter"></i></a>
                <a href="https://www.facebook.com/" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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