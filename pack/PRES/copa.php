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
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>QATAR 2022 - Album</title>
  
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="../../assets/img/QATAR 2022.png" rel="icon" type = "image/png">
  <link href="../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <link href="../../assets/todo/principal/css/bs.min.css" rel="stylesheet">
  <link href="../../assets/todo/icons/icons.css" rel="stylesheet">
  <link href="../../assets/todo/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="../../assets/todo/aos/aos.css" rel="stylesheet">
  <link href="../../assets/todo/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../../assets/todo/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="../../assets/css/main.css" rel="stylesheet">


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>



</head>

<body>

  <header id="header-album" class="header d-flex align-items-center" style="background-image: url('../assets/img/negro.png');">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="../paginas/index.html" class="logo d-flex align-items-center">
        <h1>QATAR 2022<span>.</span></h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="../../paginas/index.php">Home</a></li>
          <li><a href="../../paginas/minijuegos.php">Minijuegos</a></li>
          <li><a href="../../paginas/tienda.php">Tienda</a></li>
          <li><a href="../../paginas/intercambio.php">Intercambio</a></li>
          <li><a href="../../paginas/contact.php">Contact</a></li>
          <li><a href="../../pack/PRES/copa.php" class="active">Album</a></li>
          <li><a href="../../paginas/sesion.php"><i class="bi bi-person-fill flex-shrink-0" style= "font-size: 17px"></i> - <?php echo $_SESSION["username"];?></a></li>
        </ul>
      </nav>
    </div>
  </header>

<body style="background-image: url('../../assets/img/negro.png');">

  <div>

      <a class="carousel-control-prev" href="#" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="estadios.php" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>
      
      <section id="alb" class="alb">
        <div class="container" data-aos="fade-up">
  
          <br>

          <div class="portfolio-isotope" data-portfolio-layout="masonry" data-portfolio-sort="original-order">
  
            <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
              <li><a href="copa.php" class="filter-active">Mundial</a></li>
              <li><a href="estadios.php">Estadios</a></li>
              <li><a href="../A/grupo-A.html">Grupo A</a></li>
              <li><a href="../B/grupo-B.html">Grupo B</a></li>
              <li><a href="../C/grupo-C.html">Grupo C</a></li>
              <li><a href="../D/grupo-D.html">Grupo D</a></li>
              <li><a href="../E/grupo-E.html">Grupo E</a></li>
              <li><a href="../F/grupo-F.html">Grupo F</a></li>
              <li><a href="../G/grupo-G.html">Grupo G</a></li>
              <li><a href="../H/grupo-H.html">Grupo H</a></li>
            </ul>
  
  
            <div class="portfolio-container" data-aos="fade-up" data-aos-delay="200" style="background-image: url('../../assets/img/Argentina-flag-panoram.jpg');" width="960px" height="332px">
  
              <div class="col-lg-2 col-md-4 portfolio-item">
                <div class="portfolio-content">
                  <img src="../../assets/img/eeb.jpg" class="img-fluid">
                  <div class="portfolio-info">
                    <h4>Grupo A</h4>
                    <p>
                      Brandon Stock <br>
                      163cm <br>
                      60kg
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-lg-2 col-md-4 portfolio-item">
                <div class="portfolio-content">
                  <img src="../../assets/img/figu.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Grupo A</h4>
                    <p>
                      Brandon Stock <br>
                      163cm <br>
                      60kg
                    </p>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </section>

    </div>

</body>


  <script src="../../assets/todo/principal/js/bs.bundle.min.js"></script>
  <script src="../../assets/todo/aos/aos.js"></script>
  <script src="../../assets/todo/glightbox/js/glightbox.min.js"></script>
  <script src="../../assets/todo/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../../assets/todo/swiper/swiper-bundle.min.js"></script>
  <script src="../../assets/todo/purecounter/purecounter_vanilla.js"></script>

  <script src="../../assets/js/main.js"></script>

</body>

</html>