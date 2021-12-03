<?php
  require_once __DIR__ . '/../config.php';
  include ROOT_DIR . '/models/db/Crud.model.php';
  include ROOT_DIR . '/views/partials/head.partial.php';
?>

<div class="title-head row">
  <div class="col">
    <h1 class="text-white text-center m-3 p-3">Practicos de Programacion</h1>
    <h2 class="text-white text-center m-2 p-2">CRUD</h2>
  </div>
</div>

<div class="row">
  <nav class="container">
    <div class="row row-cols-sm-1 justify-content-end mb-3">
      <div class="col-md-2 col-sm-12">
        <a class="nav-link btn btn-outline-danger btn-lg" aria-current="page" href="/">
          Inicio
        </a>
      </div>
    </div>
  </nav>
</div>

<div class="row">
  <div class="col-5">
    <section class="card">
      <div class="card-header card-title"><h2>Ingreso de datos</h2></div>
      <div class="card-body">
        <form action="/controllers/crud.controller.php" method="POST" id="formulario" style="max-width: 38rem;">
          <div class="form-group">
            <input type="email" name="mail" id="mail" placeholder="Ingresa tu email" class="form-control me-2 mb-3" autofocus required />
          </div>
          <div class="form-group">
            <input type="text" name="nombre" id="nombre" placeholder="Ingresa tu nombre" class="form-control me-2 mb-3" required>
          </div>

          <div class="d-flex justify-content-end"><button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </form>
      </div>
    </section>
  </div>

  <div class="col-7">
    <h2>Muestreo de datos</h2>
    <section class="container">
      <?php
        $listaAlumnos = Crud::listarAlumnos();
        foreach ($listaAlumnos as $alumno) {
      ?>
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"><?= $alumno['nombre'] ?></h3>
            </div>
            <div class="card-body">
              <p class="card-text"><?= $alumno['mail'] ?></p>
            </div>
            <div class="card-footer">
              <button type="button" class="btnEditar">Editar</button>
              <form class="formBorrar" action="/controllers/crud.controller.php" method="POST">
                <input type="text" name="id" value="<?= $alumno['mail'] ?>" hidden>
                <button type="submit" class="btnEliminar">Eliminar</button>
              </form>
            </div>
          </div>
      <?php } ?>

    </section>
  </div>
</div>


<?php
  include ROOT_DIR . '/views/partials/footer.partial.php';
?>
<script src="/assets/js/ingresarAlumno.js"></script>
