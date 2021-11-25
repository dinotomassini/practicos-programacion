<?php
session_start();
require_once __DIR__ . '/./config.php';
include ROOT_DIR . '/views/partials/head.partial.php';

if (isset($_SESSION['mail'])) {
  session_unset();
  session_destroy();
}
?>

<div class="title-head row">
  <div class="col">
    <h1 class="text-white text-center m-3 p-3">Practicos de Programacion</h1>
    <h2 class="text-white text-center m-2 p-2">Lista de Practicos</h2>
  </div>
</div>

<div class="row">
  <nav class="container col">
    <div class="row justify-content-center mb-3">
      <div class="col-6">
        <a class="nav-link btn btn-outline-danger btn-lg" aria-current="page" href="/views/practico1.php">
          Practico 1 - Variables de Sesión
        </a>
      </div>
    </div>
    <div class="row justify-content-center mb-3">
      <div class="col-6">
        <a class="nav-link btn btn-outline-danger btn-lg" href="/views/practico2.php">
          Practico 2 - Require once
        </a>
      </div>
    </div>
    </ul>
  </nav>
</div>

<?php include ROOT_DIR . '/views/partials/footer.partial.php'; ?>
