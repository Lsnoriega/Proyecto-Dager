<!DOCTYPE html>
<html>
<head>
	<title>Galeria</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
<?php
  include_once'libreria.php';
  include_once'navbar.php';
?>
</head>
<body>

<main class="container mt-2 mb-4">

  <div class="row p-5 text-center bg-body-tertiary rounded-3 mb-4">
    <i class="bi mt-2 mb-3 bi-image" style="color: var(--bs-pink);
    font-size: 50px;"></i>
    <h1 class="text-body-emphasis">Galeria</h1>
    <p class="col-lg-8 mx-auto fs-5 text-muted">
      Fotos e Imagenes relacionadas a este Proyecto.
    </p>
    </div>


  <div class="row py-5 bg-body-tertiary rounded-3">
    <div class="container">

<div class="owl-carousel owl-theme justify-content-center" style="">
    <div class="item">
      <div class="card">
          <img src="images/upt_sede.jpg" class="card-img-top" alt="Upt Sede">
          <div class="card-body">
          <h5 class="card-title">Sede UPT Bolívar</h5>
          <p class="card-text">Universidad en Ciudad Bolívar.</p>
          <button href="#" class="btn btn-outline-secondary bi-eye show-image position-absolute bottom-0 mb-3" data-image="images/upt_sede.jpg"> Ver</button>
          </div>
      </div>
    </div>
    <div class="item">
      <div class="card">
          <img src="images/cdbo3.jpg" class="card-img-top" alt="...">
          <div class="card-body">
          <h5 class="card-title">Mirador Angostura</h5>
          <p class="card-text">Punto de referencia histórico en Ciudad Bolívar.</p>
          <button href="#" class="btn btn-outline-secondary bi-eye show-image position-absolute bottom-0 mb-3" data-image="images/cdbo3.jpg"> Ver</button>
          </div>
      </div>
    </div>
    <div class="item">
      <div class="card">
          <img src="images/puente6.jpg" class="card-img-top" alt="...">
          <div class="card-body">
          <h5 class="card-title">Puente Angostura</h5>
          <p class="card-text">El Puente de Angostura sobre el río Orinoco en la región de Guayana, Venezuela, fue diseñado y construido por Precomprimido C.A. y Constructora América C.A..</p>
          <button href="#" class="btn btn-outline-secondary bi-eye show-image position-absolute bottom-0 mb-3" data-image="images/puente6.jpg"> Ver</button>
          </div>
      </div>
    </div>
  <div class="item">
    <div class="card">
          <img src="images/cdbo.jpg" class="card-img-top" alt="...">
          <div class="card-body">
          <h5 class="card-title">Casco Histórico</h5>
          <p class="card-text">Se llama casco antiguo al núcleo histórico y monumental de las ciudades anterior a los ensanches del siglo XIX y principios del XX.</p>
          <button href="#" class="btn btn-outline-secondary bi-eye show-image position-absolute bottom-0 mb-3" data-image="images/cdbo.jpg"> Ver</button>
          </div>
    </div>
  </div>
  <div class="item">
    <div class="card">
          <img src="images/cascohistorico.jpg" class="card-img-top" alt="...">
          <div class="card-body">
          <h5 class="card-title">PNF Informática</h5>
          <p class="card-text">Programa nacional de formación en Informática.</p>
          <button href="#" class="btn btn-outline-secondary bi-eye show-image position-absolute bottom-0 mb-3 " data-image="images/cascohistorico.jpg"> Ver</button>
          </div>
    </div>
  </div>
</div>

<style type="text/css">
  .card-img-top{
    min-height: 180px;
    max-height: 180px;
  }
  .card-body{
    min-height: 238px;
    max-height: 238px;
  }

</style>

<script type="text/javascript">
  $(document).ready(function(){
  $('.owl-carousel').owlCarousel({
      loop:true,
      margin:10,
      nav:true,
      navText:["<i class='bi-arrow-left fs-5 m-2'></i>","<i class='bi-arrow-right fs-5 m-2'></i>"],
      center: true,
      responsive:{
          0:{
              items:1
          },
          600:{
              items:2
          },
          1000:{
              items:3
          }
      }
  });
});

</script>

  </div>
</div>
	
  
</main>
<!---------------------------------MODALES----------------------------------->
<div class="modal" id="imageModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <img class="img-fluid" src="" id="modalImage" alt="Imagen">
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  document.querySelectorAll('.show-image').forEach(button =>{
    button.addEventListener('click', function(){

      const imageUrl = this.getAttribute('data-image');
      document.getElementById('modalImage').src = imageUrl;
      $('#imageModal').modal('show');

    });
  });
</script>

<?php 
include_once'footer.php';
?>
</body>
</html>
