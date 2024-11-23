<!DOCTYPE html>
<html>
<head>
	<title>Index</title>

	  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link class="rounded-5" rel="icon" href="images/upteb.png">

    <link rel="stylesheet" type="text/css" href="css/carousel.css">

    <?php
    include_once'libreria.php';
      ?>

</head>
<body>

<?php
include 'navbar.php';
  ?>

<main class="container">
  

<!--BODY-------------------------------------------------------------------->
 <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner rounded-3">
      <div class="carousel-item active">

        <img src="images/wallpaper_6.jpg">
        
        <div class="container">
          <div class="carousel-caption text-start text-light">
            <h1>PNF Informática.</h1>
            <p class="fs-3">El Programa Nacional de Formación en Informática garantiza una formación integral.</p>
            <p><a class="btn btn-lg btn-primary bi-book-half" href="bases_legales.php"> Bases Legales</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        
        <img src="images/cdbo5.jpg">

        <div class="container">
          <div class="carousel-caption text-light">
            <h1>UPT Bolívar</h1>
            <p class="fs-3">Situada en el estado con más riquezas naturales de Venezuela, con varios Programas Nacional de Formación que aportarán los Profesionales que el País requiere.</p>
            <p><a class="btn btn-lg btn-primary bi-globe" href="https://uptbolivar.com"> Ir a la Web</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        
        <img src="images/cdbo6.jpg">

        <div class="container">
          <div class="carousel-caption text-end text-light">
            <h1 class="h1">Ciudad Bolívar.</h1>
            <p class="fs-4">Ciudad Bolívar es una ciudad venezolana y capital del Estado Bolívar, al sureste de Venezuela.</p>
            <p><a class="btn btn-lg btn-primary bi-image" href="galeria.php"> Galería</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content.


Se llama casco antiguo al núcleo histórico y monumental de las ciudades anterior a los ensanches del siglo XIX y principios del XX.


   -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <!--<img class="bd-placeholder-img rounded-circle" width="140" height="140" src="images/logo_3.jpg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false" style="min-width: 50px;"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></svg>-->

        <i class="bi-list-ul" style="color: var(--bs-indigo);
        font-size: 60px; "></i>

        <h2>Objetivos</h2>
        <p>Objetivos del Proyecto.</p>
        <p><a class="btn btn-secondary" href="objetivos.php">Ver Más &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <!--<svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>-->

        <i class="bi-bank" style="color: var(--bs-teal);
        font-size: 60px; "></i>

        <h2>Bases Legales</h2>
        <p>Base Legal del Proyecto.</p>
        <p><a class="btn btn-secondary" href="bases_legales.php">Ver Más &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <!--<svg class=" bi-bank bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>-->

        <i class="bi-image" style="color: var(--bs-pink);
        font-size: 60px; "></i>

        <h2>Galeria</h2>
        <p>Galeria de Imagenes del Proyecto.</p>
        <p><a class="btn btn-secondary" href="galeria.php">Ver Más &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading bi-bookmark-check"> Misión</h2>
        <p class="lead p-1 me-2" align="justify"><i class="me-3"></i> Somos una institución de educación universitaria que desarrolla la formación del talento humano, la creación intelectual y la vinculación comunitaria en el estado Bolívar, a través de la gestión del conocimiento científico y tecnológico para contribuir con el desarrollo de la región y el país, enmarcados en el Socialismo del Siglo XXI.</p>
      </div>

      <div class="col-md-5">
        <div class="shadow-sm h-100 p-5 bg-light border rounded-3"

        style="background-image:  url(images/cascohistorico.jpg);
        background-size: cover;
        min-height: 200px;"

         >

        </div>
      </div>
        

      </div>
    

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading bi-eye"> Visión</h2>
        <p class="lead p-1" align="justify"><i class="me-3"></i> Ser la Universidad Politécnica Territorial del estado Bolívar desplegada en toda su geografía planificando y ejecutando los procesos fundamentales universitarios que contribuya al desarrollo económico y social de la localidad, la región y el país, a través de la gestión de la ciencia y la tecnología.</p>
      </div>
      
      <div class="col-md-5">
        <div class="shadow-sm h-100 p-5 bg-light border rounded-3"

        style="background-image:  url(images/puente4.jpg);
        background-size: cover;
        min-height: 200px;"

         >
         
        </div>
      </div>

    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading bi-newspaper"> Reseña Histórica</h2>
        <p class="lead p-1" align="justify"><i class="me-3"></i> La Universidad Politécnica Territorial del estado Bolívar, se crea mediante una alocución del presidente Nicolás Maduro Moros, durante el acto con motivo de la celebración del Día del Estudiante Universitario, el miércoles 21 de noviembre del 2018, cuando anunció el nacimiento de nueve casas de estudios universitarios en diferentes estados, entre éstos Bolívar.

        A través de gaceta oficial Nº 41.531 bajo el decreto 3.683 publicada el 23 de Noviembre del 2018 a dos días del anuncio presidencial.</p>
      </div>

      <div class="col-md-5">
        <div class="shadow-sm h-100 p-5 bg-light border rounded-3"

        style="background-image:  url(images/cdbo7.jpg);
        background-size: cover;
        min-height: 200px"

         >
         
        </div>
      </div>

    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div>   

  
</main>

<?php
include 'footer.php';
?>

</body>
</html>

<?php
  if (isset($_GET['error']) && $_GET['error'] == 1) {
  ?>
    <script>
      Swal.fire({
        icon: 'error',
        title: 'Error de inicio de sesión',
        text: 'Usuario o contraseña incorrecta.'
      });
    </script>
  <?php
  }
  ?>

<?php
  if (isset($_GET['success']) && $_GET['success'] == 3) {
  ?>
    <script>
      Swal.fire({
        icon: 'success',
        title: 'Credenciales correctos.',
        text: 'Iniciando sesion...',
        timer: 4000,
        showConfirmButton: false
      }).then(function() {
        window.location.href = 'modulos/sadmin/home.php';
      });
    </script>
  <?php
  }
  ?>

  <?php
  if (isset($_GET['success']) && $_GET['success'] == 2) {
  ?>
    <script>
      Swal.fire({
        icon: 'success',
        title: 'Credenciales correctos.',
        text: 'Iniciando sesion...',
        timer: 4000,
        showConfirmButton: false
      }).then(function() {
        window.location.href = 'modulos/admin/home.php';
      });
    </script>
  <?php
  }
  ?>

  <?php
  if (isset($_GET['success']) && $_GET['success'] == 1) {
  ?>
    <script>
      Swal.fire({
        icon: 'success',
        title: 'Credenciales correctos.',
        text: 'Iniciando sesion...',
        timer: 4000,
        showConfirmButton: false
      }).then(function() {
        window.location.href = 'modulos/usuarios/home.php';
      });
    </script>
  <?php
  }
  ?>