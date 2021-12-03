<?php

require_once __DIR__ . '/../config.php';
include_once ROOT_DIR . '/models/db/Crud.model.php';

if (isset($_POST['mail']) && isset($_POST['nombre'])) {
  $mail = $_POST['mail'];
  $nombre = $_POST['nombre'];

  if (isset($_POST['editar'])) {
    $alumno = Crud::buscarAlumno($mail);
    if ($alumno) {
      $alumno = Crud::modificarAlumno($mail, $nombre);
      header("Location: /views/ingresarAlumno.php");
      // return $alumno;
    }
  } else {
    $newAlumno = Crud::ingresarAlumno($mail, $nombre);
    header("Location: /views/ingresarAlumno.php");
    // return $newAlumno;

  }

}

if (isset($_POST['id'])) {
  $alumno = Crud::eliminarAlumno($_POST['id']);
  if ($alumno) {
    header("Location: /views/ingresarAlumno.php");
  }
}

exit();

?>
