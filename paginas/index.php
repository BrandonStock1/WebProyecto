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

  <title>QATAR 2022 - Home</title>
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
          <li><a href="../paginas/index.php" class="active" >Home</a></li>
          <li><a href="../paginas/minijuegos.php">Minijuegos</a></li>
          <li><a href="../paginas/tienda.php">Tienda</a></li>
          <li><a href="../paginas/intercambio.php">Intercambio</a></li>
          <li><a href="../paginas/contact.php">Contact</a></li>
          <li><a href="../pack/PRES/copa.php">Album</a></li>
          <li><a href="../paginas/sesion.php"><i class="bi bi-person-fill flex-shrink-0" style= "font-size: 17px"></i> - <?php echo $_SESSION["username"];?></a></li>

        </ul>
      </nav>

    </div>
  </header>

  <section id="hero" class="hero">

    <div class="info d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h2 data-aos="fade-down">Bienvenido al album de <span>QATAR 2022</span></h2>
            <p data-aos="fade-up">Divertite coleccionando las figuritas del mundial de QATAR 2022 de forma digital, pero para poder conseguir figuritas vas a necesitar jugar una serie de minijuegos con los que podras conseguir monedas que servir??n para comprar los paquetes</p>
            <a data-aos="fade-up" data-aos-delay="200" href="../pack/PRES/copa.php" class="btn-get-started">Comenzar</a>
          </div>
        </div>
      </div>
    </div>

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

      <div class="carousel-item active" style="background-image: url(../assets/img/AlBayt-n.jpg)"></div>
      <div class="carousel-item" style="background-image: url(../assets/img/AlThumama.jpg)"></div>
      <div class="carousel-item" style="background-image: url(../assets/img/RasAbu.jpg)"></div>
      <div class="carousel-item" style="background-image: url(../assets/img/Education.jpg)"></div>
      <div class="carousel-item" style="background-image: url(../assets/img/Lusail.jpg)"></div>
      <div class="carousel-item" style="background-image: url(../assets/img/AlJanub.jpg)"></div>
      <div class="carousel-item" style="background-image: url(../assets/img/AhmadBin.jpg)"></div>
      <div class="carousel-item" style="background-image: url(../assets/img/Khalifa.jpg)"></div>


      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

  </section>

  <main id="main">

    <section id="alt-tienda" class="alt-tienda">
      <div class="container" data-aos="fade-up">

        <div class="row justify-content-around gy-4">
          <div class="col-lg-6 img-bg" style="background-image: url(../assets/img/eeb.jpg);" data-aos="zoom-in" data-aos-delay="100"></div>

          <div class="col-lg-5 d-flex flex-column justify-content-center">
            <h3>Ventajas de este proyecto</h3>

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
              <i class="bi bi-tree flex-shrink-0"></i>
              <div>
                <h4>Ecologico</a></h4>
                <p>No contamina el planeta ya que en vez de utilizar papel para producir las figuritas, es todo online!!</p>
              </div>
            </div>

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-clock flex-shrink-0"></i>
              <div>
                <h4>R??pido</a></h4>
                <p>Es m??s f??cil tanto comprar sobres, como buscar las figuritas que necesitas!</p>
              </div>
            </div>

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-lock flex-shrink-0"></i>
              <div>
                <h4>Seguro</a></h4>
                <p>No pueden robarte las figuritas como en nuestra infancia...</p>
              </div>
            </div>

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-emoji-laughing flex-shrink-0"></i>
              <div>
                <h4>Divertido</a></h4>
                <p>Actualmente todo es online y es mas facil adapatarse y divertirse!</p>
              </div>
            </div>

          </div>
        </div>

      </div>
    </section>

    
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
          </ul>

          <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item filter-Agosto">
              <div class="portfolio-content h-100">
                <img src="../assets/img/brandonlab1.jpeg" width= "500" height= "500px" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="../assets/img/brandonlab1.jpeg" data-gallery="portfolio-gallery-Agosto" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-Agosto">
              <div class="portfolio-content h-100">
                <img src="../assets/img/laralab1.jpeg" width= "500" height= "500px" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="../assets/img/laralab1.jpeg" data-gallery="portfolio-gallery-Agosto" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-Agosto">
              <div class="portfolio-content h-100">
                <img src="../assets/img/juaniylara.jpeg" width= "500" height= "500px" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="../assets/img/juaniylara.jpeg" data-gallery="portfolio-gallery-Agosto" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-Agosto">
              <div class="portfolio-content h-100">
                <img src="../assets/img/sashalab1.jpeg" width= "500" height= "500px" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="../assets/img/sashalab1.jpeg" data-gallery="portfolio-gallery-Agosto" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-Septiembre">
              <div class="portfolio-content h-100">
                <img src="../assets/img/gastilab.jpeg" width= "500" height= "500px" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="../assets/img/gastilab.jpeg" data-gallery="portfolio-gallery-Septiembre" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-Septiembre">
              <div class="portfolio-content h-100">
                <img src="../assets/img/juanilab2.jpg" width= "500" height= "500px" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="../assets/img/juanilab2.jpg" data-gallery="portfolio-gallery-Septiembre" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div>

          </div>
        </div>

        

      </div>
    </section>


    <section id="constructions" class="constructions">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Minijuegos</h2>
          <p>Podremos ganar TicCoins, que usaremos para comprar sobres en la tienda!!</p>
        </div>

    <section id="features" class="features section-bg">
      <div class="container" data-aos="fade-up">
        <ul class="nav nav-tabs row  g-2 d-flex">

          <li class="nav-item col-3">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
              <h4>Juego 1 (Trivia)</h4>
            </a>
          </li>

          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
              <h4>Juego 2</h4>
            </a>

          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
              <h4>Juego 3</h4>
            </a>
          </li>

          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
              <h4>Informacion</h4>
            </a>
          </li>

        </ul>
        

        <div class="tab-content">

          <div class="tab-pane active show" id="tab-1">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <h3>Trivia</h3> 
                <p class="fst-italic">
                  Un juego basado en responder preguntas sobre el mundial.
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i>Obten TicCoins al responder las preguntas correctamente</li>
                  <li><i class="bi bi-check2-all"></i>Aprender m??s de la cultura tanto de Qatar, como Arabe</li>
                  <li><i class="bi bi-check2-all"></i>Adquirir conocimientos de la historia del mejor deporte</li>
                  <li><a href= "../paginas/minijuegos.php" class="bi bi-play"> Jugar</a></li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                <img src="../assets/img/trivia.jpg" height="540" width="960" alt="" class="img-fluid">
              </div>
            </div>
          </div>

          <div class="tab-pane" id="tab-2">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <h3>Trivia</h3> 
                <p class="fst-italic">
                  Un juego basado en responder preguntas sobre el mundial.
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i>Obten TicCoins al responder las preguntas correctamente</li>
                  <li><i class="bi bi-check2-all"></i>Aprender m??s de la cultura tanto de Qatar, como Arabe</li>
                  <li><i class="bi bi-check2-all"></i>Adquirir conocimientos de la historia del mejor deporte</li>
                  <li><a href="../paginas/minijuegos.php" class="bi bi-play"> Jugar</a></li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                <img src="../assets/img/head.jpg" height="540" width="960" alt="" class="img-fluid">
              </div>
            </div>
          </div>

          <div class="tab-pane" id="tab-3">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <h3>Trivia</h3> 
                <p class="fst-italic">
                  Un juego basado en responder preguntas sobre el mundial.
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i>Obten TicCoins al responder las preguntas correctamente</li>
                  <li><i class="bi bi-check2-all"></i>Aprender m??s de la cultura tanto de Qatar, como Arabe</li>
                  <li><i class="bi bi-check2-all"></i>Adquirir conocimientos de la historia del mejor deporte</li>
                  <li><a href="../paginas/minijuegos.php" class="bi bi-play"> Jugar</a></li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                <img src="../assets/img/dino.jpg" height="540" width="960" alt="" class="img-fluid">
              </div>
            </div>
          </div>

          <div class="tab-pane" id="tab-4">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <h3>Informacion</h3>
                <p class="fst-italic">
                  Informacion del uso de TicCoins.
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i>...</li>
                  <li><i class="bi bi-check2-all"></i>...</li>
                  <li><i class="bi bi-check2-all"></i>...</li>
                  <li><a href="../paginas/minijuegos.php" class="bi bi-play"> Jugar</a></li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                <img src="../assets/img/bgfooter.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>

      </div>
    </section>

    <section id="recent-blog-posts" class="recent-blog-posts">
      <div class="container" data-aos="fade-up">
    
  <div class=" section-header">
        <h2>Tienda</h2>
        <p>Tienda donde se compran los sobres para poder lograr nuestro objetivo.</p>
      </div>

      <div class="row gy-5">

        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="post-item position-relative h-100">

            <div class="post-img position-relative overflow-hidden">
              <img src="../assets/img/figu.jpg" class="img-fluid" alt="">
            </div>

            <div class="post-content d-flex flex-column">

              <br>

              <h3 class="post-title">Sobre (15 figuritas)</h3>

              <div class="meta d-flex align-items-center">
                <div class="d-flex align-items-center">
                  <i class="bi bi-person"></i> <span class="ps-2">15</span>
                </div>
                <span class="px-3 text-black-50">/</span>
                <div class="d-flex align-items-center">
                  <i class="bi bi-folder2"></i> <span class="ps-2">Brillante asegurada</span>
                </div>
              </div>

              <hr>

              <a href="../paginas/tienda.php" class="readmore stretched-link"><span>M??s </span><i class="bi bi-arrow-right"></i></a>

            </div>

          </div>
        </div>

        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="post-item position-relative h-100">

            <div class="post-img position-relative overflow-hidden">
              <img src="../assets/img/figu.jpg" class="img-fluid" alt="">
            </div>

            <div class="post-content d-flex flex-column">

            <br>

              <h3 class="post-title">Sobre (10 figuritas)</h3>

              <div class="meta d-flex align-items-center">
                <div class="d-flex align-items-center">
                  <i class="bi bi-person"></i> <span class="ps-2">10</span>
                </div>
                <span class="px-3 text-black-50">/</span>
                <div class="d-flex align-items-center">
                  <i class="bi bi-folder2"></i> <span class="ps-2">Random</span>
                </div>
              </div>

              <hr>

              <a href="../paginas/tienda.php" class="readmore stretched-link"><span>M??s </span><i class="bi bi-arrow-right"></i></a>

            </div>

          </div>
        </div>

        <div class="col-xl-4 col-md-6">
          <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="300">

            <div class="post-img position-relative overflow-hidden">
              <img src="../assets/img/figu.jpg" class="img-fluid" alt="">
            </div>

            <div class="post-content d-flex flex-column">

            <br>

              <h3 class="post-title">Sobre (5 figuritas)</h3>

              <div class="meta d-flex align-items-center">
                <div class="d-flex align-items-center">
                  <i class="bi bi-person"></i> <span class="ps-2">5</span>
                </div>
                <span class="px-3 text-black-50">/</span>
                <div class="d-flex align-items-center">
                  <i class="bi bi-folder2"></i> <span class="ps-2">Random</span>
                </div>
              </div>

              <hr>

              <a href="../paginas/tienda.php" class="readmore stretched-link"><span>M??s </span><i class="bi bi-arrow-right"></i></a>

            </div>

          </div>
        </div>

      </div>

      </div>
    </section>


    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Equipo</h2>
          <p>Los participantes de este proyecto de ORT 2022</p>
        </div>

        <div class="slides-2 swiper">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="../assets/img/brandon.jpeg" class="testimonial-img" alt="">
                  <h3>Brandon Stock</h3>
                  <h4>Front end</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Creador de la web y dise??ador de esta mediante el front-end, utilizando HTML, css, javascript y ajax .
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="../assets/img/juani.jpeg" class="testimonial-img" alt="">
                  <h3>Juan Ignacio Cama</h3>
                  <h4>Back end</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Creador del back end de la web, realizando lo necesario a traves de php, sql y HTML .
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="../assets/img/sasha.jpeg" class="testimonial-img" alt="">
                  <h3>Sasha Cattaneo</h3>
                  <h4>Games producer</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Creadora de los minijuegos de la web, utilizando HTML, css, javascript y ajax .
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="../assets/img/gaston2.jpeg" class="testimonial-img" alt="">
                  <h3>Gast??n Edelberg</h3>
                  <h4>Blockchain producer</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Creador del Blockchain (monedas e intercambio) de la web utlizando ... .
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="../assets/img/lara.jpeg" class="testimonial-img" alt="">
                  <h3>Lara Genovese</h3>
                  <h4>Designer</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Dise??adora de la web a traves de figma y photoshop .
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>

          </div>
          <div class="swiper-pagination"></div>
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