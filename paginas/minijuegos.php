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

  <title>QATAR 2022 - Minijuegos</title>
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
          <li><a href="../paginas/minijuegos.php" class="active">Minijuegos</a></li>
          <li><a href="../paginas/tienda.php">Tienda</a></li>
          <li><a href="../paginas/intercambio.php">Intercambio</a></li>
          <li><a href="../paginas/contact.php">Contact</a></li>
          <li><a href="../pack/PRES/copa.php">Album</a></li>
          <li><a href="../paginas/sesion.php"><i class="bi bi-person-fill flex-shrink-0" style= "font-size: 17px"></i> -  <?php echo $_SESSION["username"];?> </a></li>
        </ul>
      </nav>

    </div>
  </header>

  <main id="main">

    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('../assets/img/copa-base.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Minijuegos</h2>
        <ol>
          <li><a href="../paginas/index.php">Home</a></li>
          <li>Minijuegos</li>
        </ol>

      </div>
    </div>

  </main>


  <section id="recent-blog-posts" class="recent-blog-posts">
    <div class="container" data-aos="fade-up">
  
<div class=" section-header">
      <h2>Minijuegos</h2>
      <p>La forma de ganar TicCoins divirtiendose!!</p>
    </div>

    <div class="row gy-5">

      <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="post-item position-relative h-100">

          <div class="post-img position-relative overflow-hidden">
            <img src="../assets/img/trivia.jpg" height="540" width="960" class="img-fluid" alt="">
          </div>

          <div class="post-content d-flex flex-column">

            <br>

            <h3 class="post-title">Trivia</h3>

            <div class="meta d-flex align-items-center">
              <div class="d-flex align-items-center">
                <i class="bi bi-person"></i> <span class="ps-2">1</span>
              </div>
              <span class="px-3 text-black-50">/</span>
              <div class="d-flex align-items-center">
                <i class="bi bi-folder2"></i> <span class="ps-2">10 preguntas</span>
              </div>
            </div>

            <hr>

            <a href="../trivia/index.html" class="readmore stretched-link"><span>Puedes ganar hasta 10 TicCoins </span><i class="bi bi-coin"></i></a>

          </div>

        </div>
      </div>

      <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="post-item position-relative h-100">

          <div class="post-img position-relative overflow-hidden">
            <img src="../assets/img/head.jpg" height="540" width="960" class="img-fluid" alt="">
          </div>

          <div class="post-content d-flex flex-column">

          <br>

            <h3 class="post-title">...</h3>

            <div class="meta d-flex align-items-center">
              <div class="d-flex align-items-center">
                <i class="bi bi-person"></i> <span class="ps-2">1</span>
              </div>
              <span class="px-3 text-black-50">/</span>
              <div class="d-flex align-items-center">
                <i class="bi bi-folder2"></i> <span class="ps-2">...</span>
              </div>
            </div>

            <hr>

            <a href="../paginas/minijuegos.php" class="readmore stretched-link"><span>... </span><i class="bi bi-coin"></i></a>

          </div>

        </div>
      </div>

      <div class="col-xl-4 col-md-6">
        <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="300">

          <div class="post-img position-relative overflow-hidden">
            <img src="../assets/img/dino.jpg" height="540" width="960" class="img-fluid" alt="">
          </div>

          <div class="post-content d-flex flex-column">

          <br>

            <h3 class="post-title">....</h3>

            <div class="meta d-flex align-items-center">
              <div class="d-flex align-items-center">
                <i class="bi bi-person"></i> <span class="ps-2">1</span>
              </div>
              <span class="px-3 text-black-50">/</span>
              <div class="d-flex align-items-center">
                <i class="bi bi-folder2"></i> <span class="ps-2">...</span>
              </div>
            </div>

            <hr>

            <a href="../paginas/minijuegos.php" class="readmore stretched-link"><span>... </span><i class="bi bi-coin"></i></a>

          </div>

        </div>
      </div>

    </div>

    </div>
  </section>


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