<!DOCTYPE html>
<html>
<head>
	<title>Objetivos</title>

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
    <i class="bi mt-2 mb-3 bi-list-ul" style="color: var(--bs-indigo);
    font-size: 50px;"></i>
    <h1 class="text-body-emphasis">Objetivos</h1>
    <p class="col-lg-8 mx-auto fs-5 text-muted">
      Aqui se encuentran el objetivo general y los objetivos específicos.
    </p>
    </div>

		<div class="row bg-body-tertiary rounded-3 p-5">

			<div class="col-md-3 mb-4">
			
			<div class=" p-5 bg-light border rounded-3 shadow-sm"

        style="background-image:  url(images/wallpaper_2.jpg);
        background-size: cover;
        max-height: 400px;
        min-height: 265px;"

         >

          <h2 class="text-light">SGH</h2>
          <p class="text-light">Sistema de Gestión de Horarios.</p>
          
        </div>

		    </div>

		<div class="col-md-9">

			<div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0" class="scrollspy-example" tabindex="0">
  <h4 id="list-item-1">Objetivo General</h4>
  <p align="justify">“Desarrollar un Sistema para la Gestión de Horarios del PNF Informática de la Universidad Politécnica Territorial del Estado Bolívar, Parroquia Catedral - Municipio Angostura del Orinoco,   Ciudad Bolívar – Estado Bolívar”.
</p>

  <br>

  <h4 id="list-item-1">Objetivos Específicos</h4>
  <p align="justify">
  1)Recopilar la información requerida para el diseño del sistema.
  <br>
  2)Analizar la información.
  <br>
  3)Codificar los módulos del sistema.
  <br>
  4)Ejecutar las pruebas necesarias a los módulos.
  <br>
  5)Capacitar a los usuarios en el uso del sistema.
  <br>
  6)Implementar el sistema en el departamento del PNFI.
  </p>
  	
            </div>
			
		</div>
			
		</div>

		

	</main>

<?php
include_once'footer.php';
?>
</body>
</html>