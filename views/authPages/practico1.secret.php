<?php
include '../../config.php';
include ROOT_DIR . '/views/partials/head.partial.php';
?>

<div class="title-head row">
  <div class="col">
    <h1 class="text-white text-center m-3 p-3">Practicos de Programacion</h1>
    <h2 class="text-white text-center m-2 p-2">Practico 1 - Variables de Sesión</h2>
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
  <div class="col">
    <div class="card" style="max-width: 26rem;">

      <?php
      session_start();
      if (isset($_SESSION['mail'])) { ?>
      <div class="card-header bg-danger">
        <h2>ESTO ES UN SECRETO</h2>
      </div>
      <div class="card-body">
        <div class="card-text">
          <p>Hola <strong><?= $_SESSION['nombre'] ?></strong>, tu mail <?= $_SESSION['mail'] ?> fue encontrado en la
            base de datos.</p>
        </div>
      </div>
      <?php
      } else {
      ?>
      <div class="card-header bg-info">
        <h2 class="text-white">ESTO NO ES UN SECRETO</h2>
      </div>
      <div class="card-body">
        <div class="card-text">
          <p>Hola desconocido, tu mail no fue encontrado en la base de datos.</p>
        </div>
      </div>
      <?php
      }
      ?>

    </div>
  </div>
</section>


<?php include ROOT_DIR . '/views/partials/footer.partial.php'; ?>
