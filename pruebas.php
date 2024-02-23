<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" href="assets/ARQLogoPestania.ico" type="image/x-icon">

    <!-- CSS BOOSTRAP 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <!-- Roboto font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <!-- General Styles -->
	<link rel="stylesheet" href=".assets/styles.css">

    <!-- Logo -->
    <link rel="icon" href="contents/brand_and_logo/ARQLogoPestania.ico" type="image/x-icon">

    <?php include('templates/head.php'); ?>


</head>

<header class="head-container">
    <div class="container">
        <div class="d-flex flex-wrap justify-content-center py-4">

            <a href="index.php?page=home" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <img src="contents/Logo_ARQFernandez.png" class="img-fluid" alt="ARQ Carlos Fernanez Cabrera">
            </a>

            <!-- Botón para mostrar el menú en dispositivos móviles -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menú para dispositivos de tamaño grande -->
            <ul class="nav nav-underline nav-scroller mb-3 d-none d-md-block">
              <?php foreach ($pages as $page => $label): ?>
                <li class="nav-item">
                  <a href="index.php?page=<?php echo $page; ?>" class="nav-link link-body-emphasis <?php echo ($current_page == $page) ? 'active' : ''; ?>" style="font-weight: normal !important;"><?php echo $label; ?></a>
                </li>
              <?php endforeach; ?>
            </ul>

            <ul class="nav nav-underline nav-scroller mb-3">
                <li class="nav-item">
                    <a href="pruebas.html" class="nav-link link-body-emphasis active" style="font-weight: normal !important;">ESTUDIO</a>
                </li>
                <li class="nav-item">
                    <a href="pruebas.html" class="nav-link link-body-emphasis">ESTUDIO</a>
                </li>
            </ul>

        </div>
    </div>

    

    
</header>

<body>

    <header class="head-container">
        <div class="container">
          <div class="d-flex flex-wrap justify-content-center py-4">
            <a href="index.php?page=home" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
              <img src="contents/Logo_ARQFernandez.png" class="img-fluid" alt="ARQ Carlos Fernanez Cabrera">
            </a>
      
            <!-- Botón para mostrar el menú en dispositivos móviles -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
      
            <!-- Menú para dispositivos de tamaño grande -->
            <ul class="nav nav-underline nav-scroller mb-3 d-none d-md-block">
              <?php foreach ($pages as $page => $label): ?>
                <li class="nav-item">
                  <a href="index.php?page=<?php echo $page; ?>" class="nav-link link-body-emphasis <?php echo ($current_page == $page) ? 'active' : ''; ?>" style="font-weight: normal !important;"><?php echo $label; ?></a>
                </li>
              <?php endforeach; ?>
            </ul>
      
            <!-- Menú para dispositivos móviles -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav">
                <?php foreach ($pages as $page => $label): ?>
                  <li class="nav-item">
                    <a href="index.php?page=<?php echo $page; ?>" class="nav-link link-body-emphasis <?php echo ($current_page == $page) ? 'active' : ''; ?>"><?php echo $label; ?></a>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>
          </div>
        </div>
      </header>
      
      <div>
        <!-- Carousel wrapper -->
<div
  id="carouselVideoExample"
  class="carousel slide carousel-fade"
  data-mdb-ride="carousel"
>
  <!-- Indicators -->
  <div class="carousel-indicators">
    <button
      type="button"
      data-mdb-target="#carouselVideoExample"
      data-mdb-slide-to="0"
      class="active"
      aria-current="true"
      aria-label="Slide 1"
    ></button>
    <button
      type="button"
      data-mdb-target="#carouselVideoExample"
      data-mdb-slide-to="1"
      aria-label="Slide 2"
    ></button>
    <button
      type="button"
      data-mdb-target="#carouselVideoExample"
      data-mdb-slide-to="2"
      aria-label="Slide 3"
    ></button>
  </div>

  <!-- Inner -->
  <div class="carousel-inner">
    <!-- Single item -->
    <div class="carousel-item active">
      <video class="img-fluid" autoplay loop muted>
        <source src="https://mdbcdn.b-cdn.net/img/video/Tropical.mp4" type="video/mp4" />
      </video>
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>
          Nulla vitae elit libero, a pharetra augue mollis interdum.
        </p>
      </div>
    </div>

    <!-- Single item -->
    <div class="carousel-item">
      <video class="img-fluid" autoplay loop muted>
        <source src="https://mdbcdn.b-cdn.net/img/video/forest.mp4" type="video/mp4" />
      </video>
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        </p>
      </div>
    </div>

    <!-- Single item -->
    <div class="carousel-item">
      <video class="img-fluid" autoplay loop muted>
        <source
          src="https://mdbcdn.b-cdn.net/img/video/Agua-natural.mp4"
          type="video/mp4"
        />
      </video>
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>
          Praesent commodo cursus magna, vel scelerisque nisl consectetur.
        </p>
      </div>
    </div>
  </div>
  <!-- Inner -->

  <!-- Controls -->
  <button
    class="carousel-control-prev"
    type="button"
    data-mdb-target="#carouselVideoExample"
    data-mdb-slide="prev"
  >
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button
    class="carousel-control-next"
    type="button"
    data-mdb-target="#carouselVideoExample"
    data-mdb-slide="next"
  >
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- Carousel wrapper -->
      </div>

      <div>
        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
                </div>
    
</body>
</html>