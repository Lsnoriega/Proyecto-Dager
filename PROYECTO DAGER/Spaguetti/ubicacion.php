<!DOCTYPE html>
<html>
<head>
  <title>Ubicación</title>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <?php 
    include 'libreria.php';
    include 'navbar.php';
     ?>


</head>
<body>

<main class="container mt-2 mb-4">

  <div class="row p-5 text-center bg-body-tertiary rounded-3 mb-4">
    <i class="bi mt-2 mb-3 bi-geo-alt-fill" style="color: var(--bs-red);
    font-size: 50px;"></i>
    <h1 class="text-body-emphasis">Ubicación</h1>
    <p class="col-lg-8 mx-auto fs-5 text-muted">
      Encuentra la Ubicación de la Sede Casco Histórico del UPT Bolívar en Google Maps.
    </p>
    </div>


  <div class="row">
    <div class="col-12">
      <div class="card" style="height: 400px;">
        <div class="card-header"> <h3 class="bi-geo-alt-fill" align="center">Ubicación</h3></div>
        <div class="card-body">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.604972176981!2d-63.55407492808204!3d8.141635102253884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8dce8715e4632a8f%3A0x5a78554099f377b2!2sUniversidad%20Polit%C3%A9cnica%20Territorial%20del%20Estado%20Bol%C3%ADvar%20(UPTBol%C3%ADvar)!5e0!3m2!1ses!2sve!4v1709747160412!5m2!1ses!2sve"  style="border:0;" width="100%" height="100%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        
      </div>
    </div>
  </div>


  

</main>
<?php require_once'footer.php'; ?>
</body>
</html>