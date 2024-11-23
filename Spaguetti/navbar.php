
<nav class="navbar navbar-expand-lg bg-body-tertiary"  >
  <div class="container-fluid">
    
    <a class="navbar-brand pe-none" href="#">
      <img src="images/upteb.png" class="shadow-sm rounded-circle" alt="Upt"  style="

      width: 40px;
      height: 35px;

      ">
    </a>

    <a class="navbar-brand fw-bold" href="home.php"> SGH</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a class="nav-link  bi-house" aria-current="page" href="index.php"> Inicio</a>
        </li>
        
            
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle bi-sun-fill" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            
          </a>
          <ul class="dropdown-menu" aria-labelledby="bd-theme">
            <li class="dropdown-item bi-sun" data-bs-theme-value="light"> Claro</li>
            <li class="dropdown-item bi-moon"  id="dark" data-bs-theme-value="dark"> Oscuro</li>
            <li class="dropdown-item bi-circle-half" data-bs-theme-value="auto"> Auto</li>
            <li class="dropdown-divider"><hr></li> 
            <li class="dropdown-item bi-tsunami" data-bs-theme-value="blue"> Clásico</li>
          </ul>
          
        </li>
        
      </ul>
      <div class="">
      <button class="btn btn-primary bi-person dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"> Iniciar Sesión
      </button>

      <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="dropdownMenuButton1">
    
      <li><a class="dropdown-item bi-person-fill btn-link" data-bs-toggle="collapse" href="#Usuario" role="button" aria-expanded="false" aria-controls="Usuario" title="Ingresa como Usuario al Sistema" data-bs-auto-close="outside"> Usuario</a></li>

      <li><a class="dropdown-item bi-person-circle btn-link" data-bs-toggle="collapse" href="#Admin" role="button" aria-expanded="false" aria-controls="Admin"> Administrador</a></li>

      <li><a class="dropdown-item bi-person-square btn-link" data-bs-toggle="collapse" href="#SAdmin" role="button" aria-expanded="false" aria-controls="SAdmin"> Super Administrador</a></li>
    

      </ul>
      </div>
    </div>
  </div>
</nav>

<!--COLLAPSE---------------------------------------------------------------> 
<main class="container py-3">
<!-- USUARIO COMÚN  -->

    <div class="collapse" id="Usuario">
  <div class="row align-items-center g-lg-5 py-5">
      

      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3 bi-person-fill"> Usuario:</h1>
        <p class="col-lg-10 fs-4" align="justify">Tienen acceso limitado y no pueden realizar tareas de administración como asignar privilegios o realizar cambios importantes en la plataforma.</p>
   
      </div>


      <div class="col-md-10 mx-auto col-lg-5">


<ul class="nav nav-tabs mb-2 justify-content-end" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active bi-x-lg bg-body" id="home-tab" data-bs-target="#Usuario" type="button" role="tab" aria-selected="true" data-bs-toggle="collapse"
aria-controls="Usuario" style="color:red;"></button>
  </li>
</ul>

        <form class="p-4 p-md-5 border rounded-3 needs-validation" method="POST" action="config/login.php" style="background-color: rgba(0, 0, 0, 0.02);" novalidate>
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder=" name@example.com" name="email" maxlength="25" required>
            <label for="floatingInput" class="bi-envelope text-muted"> Email</label>
            <div class="valid-feedback" id="email">Perfecto!</div>
            <div class="invalid-feedback" id="email">
            Por favor, introduce tu Email.</div>
          </div>

          <div class="form-floating mb-3">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" maxlength="20" required>
            <label for="floatingPassword" class="bi-key text-muted" > Password</label>
            <div class="valid-feedback" id="password">Perfecto!</div>
            <div class="invalid-feedback" id="password">Por favor, introduce tu contraseña.</div>
          </div>
          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me"> Recuerdame
            </label>
          </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit" name="btn-ingresar-1">Iniciar Sesión</button>
          <hr class="my-4">
          <small class="text-muted">Al iniciar sesión aceptas los terminos de uso.</small>
          <br>
          <!--<div class="forgot text-center">
                        <small class="bi-unlock-fill"> <a href="#" class="my-4">Olvidaste Tu Contraseña?</a></small>
          </div>-->
        </form>
      </div>
    </div>
</div>

<!-- FIN USUARIO COMÚN  --> 


<!-- ADMINISTRADOR  -->

<div class="collapse" id="Admin">
  <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3 bi-person-circle"> Administrador:</h1>
        <p class="col-lg-10 fs-4" align="justify">Los administradores tienen privilegios para gestionar ciertas áreas de la plataforma. Pueden realizar tareas como gestionar usuarios, grupos, servicios, configuraciones, contraseñas, entre otras.</p>
      </div>
      
      <div class="col-md-10 mx-auto col-lg-5">

        <ul class="nav nav-tabs mb-2 justify-content-end" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active bi-x-lg" id="home-tab" data-bs-target="#Admin" type="button" role="tab" aria-selected="true" data-bs-toggle="collapse"
aria-controls="Admin" style="color:red;"></button>
  </li>
</ul>
        <form class="p-4 p-md-5 border rounded-3 needs-validation" method="POST" action="config/login.php" style="background-color: rgba(0, 0, 0, 0.02);" novalidate>
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder=" name@example.com" name="email" maxlength="25" required>
            <label for="floatingInput" class="bi-envelope text-muted"> Email</label>
            <div class="invalid-feedback" id="email">Por favor, Introduce tu Email.</div>
            <div class="valid-feedback" id="email">Bien.</div>
          
          </div>
          
          <div class="form-floating mb-3">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" maxlength="20" required>
            <label for="floatingPassword" class="bi-key text-muted"> Password</label>
            <div class="invalid-feedback" id="password">Por favor, Introduce tu Password</div>
            <div class="valid-feedback" id="password">Correcto.</div>

          </div>
          
          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me"> Recuerdame
            </label>
          </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit" name="btn-ingresar-2">Iniciar Sesión</button>
          <hr class="my-4">
          <small class="text-muted">Al iniciar sesión aceptas los terminos de uso.</small>
          <br>
          <!--<div class="forgot text-center">
                        <small class="bi-unlock-fill"> <a href="#" class="my-4">Olvidaste Tu Contraseña?</a></small>
          </div>-->
        </form>
      </div>
    </div>
</div>

<!-- FIN ADMINISTRADOR  -->


<!-- SUPER ADMINISTRADOR  -->
<div class="collapse" id="SAdmin">
  <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3 bi-person-square"> Super Administrador:</h1>
        <p class="col-lg-10 fs-4" align="justify">Este rol es el más poderoso y tiene acceso total a todas las funciones y capacidades de la plataforma. Los superadmin pueden realizar todas las tareas de administración, incluyendo la gestión completa de usuarios, servicios, configuraciones avanzadas, entre otras funciones críticas.</p>
      </div>
      
      <div class="col-md-10 mx-auto col-lg-5">


        <ul class="nav nav-tabs mb-2 justify-content-end" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active bi-x-lg" id="home-tab" data-bs-target="#SAdmin" type="button" role="tab" aria-selected="true" data-bs-toggle="collapse"
aria-controls="SAdmin" style="color:red;"></button>
  </li>
</ul>

        <form class="p-4 p-md-5 border rounded-3 needs-validation" method="POST" action="config/login.php" style="background-color: rgba(0, 0, 0, 0.02);" novalidate>
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder=" name@example.com" name="email" maxlength="25" required>
            <label for="floatingInput" class="bi-envelope text-muted"> Email</label>
            <div class="invalid-feedback" id="email">Por favor, Introduce tu Email.</div>
            <div class="valid-feedback" id="email">Excelente.</div>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" maxlength="20" required>
            <label for="floatingPassword" class="bi-key text-muted"> Password</label>
            <div class="invalid-feedback">Por favor, Introduce tu Contraseña.</div>
            <div class="valid-feedback">Bien.</div>
          </div>
          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me"> Recuerdame
            </label>
          </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit" name="btn-ingresar-3">Iniciar Sesión</button>
          <hr class="my-4">
          <small class="text-muted">Al iniciar sesión aceptas los terminos de uso.</small>
          <br>
          <!--<div class="forgot text-center">
                        <small class="bi-unlock-fill"> <a href="#" class="my-4">Olvidaste Tu Contraseña?</a></small>
          </div>-->
        </form>
      </div>
    </div>
</div>

<!-- FIN SUPER ADMINISTRADOR  -->


</main>

<script>
  $('.btn-link').click(function(){

    $('.collapse').not($(this).next()).collapse('hide');

  });
</script>
<script type="text/javascript">
  // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
</script>