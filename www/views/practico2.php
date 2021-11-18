<?php
include '../config.php';
//include ROOT_DIR . '/models/db/Crud.model.php';
include ROOT_DIR . '/models/alumno/Alumno.php';
include ROOT_DIR . '/views/partials/head.partial.php';
?>
<!-- 
Confeccionar una librería que contenga una función llamada retornarConexion, la misma debe llamar a
las funciones mysql_connect y mysql_select_db y retornar la variable que genero la función
mysql_connect.
Tener en cuenta que a esta función la deben implementar en el archivo “pagina2.php”. En el archivo
“pagina1.php” incluir la librería que contiene la función retornarConexion. Luego imprimir todos los
registros de la tabla ALUMNOS 
-->

<?php
$listaAlumnos = [
  [
    'nombre' => 'dino',
    'mail' => 'dino@dino.com',
  ],
  [
    'nombre' => 'emma',
    'mail' => 'emma@emma.com'
  ]
];
//$listaAlumnos = Crud::listarAlumnos();
?>

<div class="title-head row">
  <div class="col">
    <h1 class="text-white text-center m-3 p-3">Practicos de Programacion</h1>
    <h2 class="text-white text-center m-2 p-2">Practico 2 - Require once</h2>
  </div>
</div>

<div class="row">
  <nav class="container">
    <div class="row row-cols-sm-1 justify-content-between align-items-end mb-3">
      <div class="col-md-2 col-sm-12">
        <a class="nav-link btn btn-outline-danger btn-lg" aria-current="page" href="/">
          Inicio
        </a>
      </div>
      <div class="col-md-2 col-sm-12">
        <button class="nav-link btn btn-outline-danger btn-lg" aria-current="page" href="/">
          Listar Alumnos
        </button>
      </div>
    </div>
  </nav>
</div>

<section class="container">
  <table class="table table-danger table-striped table-hover">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($listaAlumnos as $alumno) {
      ?>
      <tr>
        <?php
          foreach ($alumno as $key => $value) {
            // echo strtoupper($key) . ": $value<br />";
          ?>
        <td><?= $value; ?></td>
        <?php
          }
          ?>
      </tr>
      <?php
      }
      ?>
    </tbody>
  </table>

</section>

<?php include '/views/partials/footer.partial.php'; ?>
