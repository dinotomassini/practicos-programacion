<?php

require_once __DIR__ . '/../config.php';
include_once ROOT_DIR . '/models/db/Crud.model.php';

if (isset($_POST['mail'])) {
  $mail = $_POST['mail'];

  $alumno = Crud::buscarAlumno($mail);
  if ($alumno) {
    if ($alumno->getMail() == $mail) {
      session_start();
      $_SESSION['mail'] = $alumno->getMail();
      $_SESSION['nombre'] = $alumno->getNombre();
    }
  }

  header('Location: /views/authPages/practico1.secret.php');
  exit;
}
