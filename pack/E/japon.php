<?php 
    include_once("../../mysql_functions.php");
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

  <header id="header-album" class="header d-flex align-items-center" style="background-image: url('../../assets/img/negro.png');">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="../../paginas/index.html" class="logo d-flex align-items-center">
        <h1>QATAR 2022<span>.</span></h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="../../paginas/index.html">Home</a></li>
          <li><a href="../../paginas/minijuegos.html">Minijuegos</a></li>
          <li><a href="../../paginas/tienda.html">Tienda</a></li>
          <li><a href="../../paginas/intercambio.html">Intercambio</a></li>
          <li><a href="../../paginas/contact.html">Contact</a></li>
          <li><a href="../../pack/album.php" class="active">Album</a></li>
          <li><a href="../../paginas/sesion.html"><i class="bi bi-person-fill flex-shrink-0" style= "font-size: 17px"></i> - <?php echo $_SESSION["username"];?></a></li>
        </ul>
      </nav>
    </div>
  </header>

<body style="background-image: url('../../assets/img/negro.png');">

  <div>

      <a class="carousel-control-prev" href="../../pack/E/alemania.php" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="../../pack/F/grupo-F.html" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>
      
      <section id="alb" class="alb">
        <div class="container" data-aos="fade-up">
  
          <br>

          <div class="portfolio-isotope" data-portfolio-layout="masonry" data-portfolio-sort="original-order">
  
            <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
              <li><a href="../../pack/album.php">Principal</a></li>
              <li><a href="../../pack/album0.php">Principal2</a></li>
              <li><a href="../../pack/A/grupo-A.html">Grupo A</a></li>
              <li><a href="../../pack/B/grupo-B.html" >Grupo B</a></li>
              <li><a href="../../pack/C/grupo-C.html">Grupo C</a></li>
              <li><a href="../../pack/D/grupo-D.html">Grupo D</a></li>
              <li><a href="../../pack/E/grupo-E.html"class="filter-active">Grupo E</a></li>
              <li><a href="../../pack/F/grupo-F.html">Grupo F</a></li>
              <li><a href="../../pack/G/grupo-G.html">Grupo G</a></li>
              <li><a href="../../pack/H/grupo-H.html">Grupo H</a></li>
            </ul>
  
  
            <div class="portfolio-container" data-aos="fade-up" data-aos-delay="200" style="background-image: url('../../assets/img/Argentina-flag-panoram.jpg');" width="960px" height="332px">
  
            <div class="col-lg-2 col-md-4 portfolio-item">
                <div class="portfolio-content">
                  <img src="../../assets/img/figu.jpg" class="img-fluid">
                  <div class="portfolio-info">
                    <h4>ESCUDO</h4>
                  </div>
                </div>
              </div>

              <div class="col-lg-2 col-md-4 portfolio-item">
                <div class="portfolio-content">
                  <img src="../../assets/img/figu.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>PORTERO</h4>
                    <?php 
                    $query = "SELECT * FROM jugadores WHERE id = 212";
                    $result = DB::getInstance()->query($query);
                    if($result->count() != 0){
                      foreach($result->results() as $fila){
                echo '<p>
                    '.$fila->nombre_y_apellido.' <br>
                    '.$fila-> edad.' años <br>
                    '.$fila->peso.'kg <br>
                    '.$fila-> altura.'cm <br>
                </p>';
            }
        }
        ?>
                  </div>
                </div>
              </div>

              <div class="col-lg-2 col-md-4 portfolio-item">
                <div class="portfolio-content">
                  <img src="../../assets/img/figu.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>DEFENSA</h4>
                    <?php 
                    $query = "SELECT * FROM jugadores WHERE id = 213";
                    $result = DB::getInstance()->query($query);
                    if($result->count() != 0){
                      foreach($result->results() as $fila){
                echo '<p>
                    '.$fila->nombre_y_apellido.' <br>
                    '.$fila-> edad.' años <br>
                    '.$fila->peso.'kg <br>
                    '.$fila-> altura.'cm <br>
                </p>';
            }
        }
        ?>
                  </div>
                </div>
              </div>
  
              <div class="col-lg-2 col-md-4 portfolio-item">
                <div class="portfolio-content">
                  <img src="../../assets/img/figu.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>DEFENSA</h4>
                    <?php 
                    $query = "SELECT * FROM jugadores WHERE id = 214";
                    $result = DB::getInstance()->query($query);
                    if($result->count() != 0){
                      foreach($result->results() as $fila){
                echo '<p>
                    '.$fila->nombre_y_apellido.' <br>
                    '.$fila-> edad.' años <br>
                    '.$fila->peso.'kg <br>
                    '.$fila-> altura.'cm <br>
                </p>';
            }
        }
        ?>
                  </div>
                </div>
              </div>

              <div class="col-lg-2 col-md-4 portfolio-item">
                <div class="portfolio-content">
                  <img src="../../assets/img/figu.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>DEFENSA</h4>
                    <?php 
                    $query = "SELECT * FROM jugadores WHERE id = 215";
                    $result = DB::getInstance()->query($query);
                    if($result->count() != 0){
                      foreach($result->results() as $fila){
                echo '<p>
                    '.$fila->nombre_y_apellido.' <br>
                    '.$fila-> edad.' años <br>
                    '.$fila->peso.'kg <br>
                    '.$fila-> altura.'cm <br>
                </p>';
            }
        }
        ?>
                  </div>
                </div>
              </div>
              <div class="col-lg-2 col-md-4 portfolio-item">
                <div class="portfolio-content">
                  <img src="../../assets/img/figu.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>DEFENSA</h4>
                    <?php 
                    $query = "SELECT * FROM jugadores WHERE id = 216";
                    $result = DB::getInstance()->query($query);
                    if($result->count() != 0){
                      foreach($result->results() as $fila){
                echo '<p>
                    '.$fila->nombre_y_apellido.' <br>
                    '.$fila-> edad.' años <br>
                    '.$fila->peso.'kg <br>
                    '.$fila-> altura.'cm <br>
                </p>';
            }
        }
        ?>
                  </div>
                </div>
              </div>

              <div class="col-lg-2 col-md-4 portfolio-item">
                <div class="portfolio-content">
                  <img src="../../assets/img/figu.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>DEFENSA</h4>
                    <?php 
                    $query = "SELECT * FROM jugadores WHERE id = 217";
                    $result = DB::getInstance()->query($query);
                    if($result->count() != 0){
                      foreach($result->results() as $fila){
                echo '<p>
                    '.$fila->nombre_y_apellido.' <br>
                    '.$fila-> edad.' años <br>
                    '.$fila->peso.'kg <br>
                    '.$fila-> altura.'cm <br>
                </p>';
            }
        }
        ?>
                  </div>
                </div>
              </div>

              <div class="col-lg-2 col-md-4 portfolio-item">
                <div class="portfolio-content">
                  <img src="../../assets/img/figu.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>MEDIOCAMPO</h4>
                    <?php 
                    $query = "SELECT * FROM jugadores WHERE id = 218";
                    $result = DB::getInstance()->query($query);
                    if($result->count() != 0){
                      foreach($result->results() as $fila){
                echo '<p>
                    '.$fila->nombre_y_apellido.' <br>
                    '.$fila-> edad.' años <br>
                    '.$fila->peso.'kg <br>
                    '.$fila-> altura.'cm <br>
                </p>';
            }
        }
        ?>
                  </div>
                </div>
              </div>

              <div class="col-lg-2 col-md-4 portfolio-item">
                <div class="portfolio-content">
                  <img src="../../assets/img/figu.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>MEDIOCAMPO</h4>
                    <?php 
                    $query = "SELECT * FROM jugadores WHERE id = 219";
                    $result = DB::getInstance()->query($query);
                    if($result->count() != 0){
                      foreach($result->results() as $fila){
                echo '<p>
                    '.$fila->nombre_y_apellido.' <br>
                    '.$fila-> edad.' años <br>
                    '.$fila->peso.'kg <br>
                    '.$fila-> altura.'cm <br>
                </p>';
            }
        }
        ?>
                  </div>
                </div>
              </div>

              
              <div class="col-lg-2 col-md-4 portfolio-item">
                <div class="portfolio-content">
                  <img src="../../assets/img/figu.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>MEDIOCAMPO</h4>
                    <?php 
                    $query = "SELECT * FROM jugadores WHERE id = 220";
                    $result = DB::getInstance()->query($query);
                    if($result->count() != 0){
                      foreach($result->results() as $fila){
                echo '<p>
                    '.$fila->nombre_y_apellido.' <br>
                    '.$fila-> edad.' años <br>
                    '.$fila->peso.'kg <br>
                    '.$fila-> altura.'cm <br>
                </p>';
            }
        }
        ?>
                  </div>
                </div>
              </div>

             
              <div class="col-lg-2 col-md-4 portfolio-item">
                <div class="portfolio-content">
                  <img src="../../assets/img/figu.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>DELANTERA</h4>
                    <?php 
                    $query = "SELECT * FROM jugadores WHERE id = 221";
                    $result = DB::getInstance()->query($query);
                    if($result->count() != 0){
                      foreach($result->results() as $fila){
                echo '<p>
                    '.$fila->nombre_y_apellido.' <br>
                    '.$fila-> edad.' años <br>
                    '.$fila->peso.'kg <br>
                    '.$fila-> altura.'cm <br>
                </p>';
            }
        }
        ?>
                  </div>
                </div>
              </div>

            
              <div class="col-lg-2 col-md-4 portfolio-item">
                <div class="portfolio-content">
                  <img src="../../assets/img/figu.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>DELANTERA</h4>
                    <?php 
                    $query = "SELECT * FROM jugadores WHERE id = 222";
                    $result = DB::getInstance()->query($query);
                    if($result->count() != 0){
                      foreach($result->results() as $fila){
                echo '<p>
                    '.$fila->nombre_y_apellido.' <br>
                    '.$fila-> edad.' años <br>
                    '.$fila->peso.'kg <br>
                    '.$fila-> altura.'cm <br>
                </p>';
            }
        }
        ?>
                  </div>
                </div>
              </div>

      </div>


            <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
              <li><a href="../../pack/E/espana.php">España</a></li>
              <li><a href="../../pack/E/costa.php">Costa Rica</a></li>
              <li><a href="../../pack/E/alemania.php" >Alemania</a></li>
              <li><a href="../../pack/E/japon.php"class="filter-active">Japón</a></li>
            </ul>

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