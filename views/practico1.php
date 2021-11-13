<?php
include '../config.php';
include ROOT_DIR . '/views/partials/head.partial.php';
?>
<!--
<section id="buscador" class="container mt-3 mb-3">
  <form class="d-flex mx-auto" style="max-width: 38rem;">
    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
    <button class="btn btn-outline-success" type="submit">Buscar</button>
  </form>
</section>
-->
<div class="title-head row">
  <div class="col">
    <h1 class="text-white text-center m-3 p-3">Practicos de Programacion</h1>
    <h2 class="text-white text-center m-2 p-2">Practico 1 - Variables de Sesión</h2>
    <p class="text-white">
      Confeccionar un formulario que solicite ingresar el mail de un alumno. Si el mail existe en la tabla
      ALUMNOS, rescatar su nombre y almacenarlo en una variable de sesión. Además disponer un
      hipervínculo a una tercera pagina que verifique si existe la variable de sesión y de la bienvenida al
      alumno, en caso contrario mostrar un mensaje indicando que no puede visitar esta pagina (para saber si una
      variable de sesión esta definida llamamos a la función isset).
      If (isset($_SESION[‘nombre’])) ….
    </p>
  </div>
</div>

<div class="row">
  <nav class="container">
    <div class="row justify-content-end align-items-end mb-3">
      <div class="col-2">
        <a class="nav-link btn btn-outline-danger btn-lg" aria-current="page" href="/">
          Inicio
        </a>
      </div>
    </div>
  </nav>
</div>

<section class="container mt-3 mb-3 row justify-content-center">
  <div class="col-4">
    <form action="/controllers/practico1.controller.php" method="POST" class="" style="max-width: 38rem;">
      <div class="form-group">
        <input type="email" name="mail" id="mail" placeholder="Ingresa tu email" class="form-control me-2 mb-3"
          autofocus required />
      </div>
      <div class="d-flex justify-content-end"><button type="submit" class="btn btn-primary">Verificar email</button>
      </div>
    </form>
  </div>

</section>

<?php include ROOT_DIR . '/views/partials/footer.partial.php'; ?>
