<?php

include '../config.php';
//include ROOT_DIR . '/models/alumno/Alumno.php';
include ROOT_DIR . '/models/db/Crud.model.php';


if (isset($_POST['mail'])) {
  $mail = $_POST['mail'];
  $alumno = [
    'nombre' => 'dino',
    'mail' => 'dino@dino.com'
  ];
  //$alumno = new Alumno('dino', 'dino@dino.com');
  //$alumno = $Crud::buscarAlumno($mail);
  if ($alumno['mail'] === $mail) {
    session_start();
    $_SESSION['nombre'] = $alumno['nombre']; //$alumno->getNombre();
    $_SESSION['mail'] = $alumno['mail']; //$alumno->getMail();
  }
  header('Location: /views/authPages/practico1.secret.php', true, 302);
  exit;
}