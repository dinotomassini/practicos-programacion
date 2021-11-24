<?php

require_once __DIR__ . "/../../config.php";
include_once ROOT_DIR . '/models/db/Connection.model.php';
include_once ROOT_DIR . '/models/alumno/Alumno.php';

class Crud {

  public static function buscarAlumno($mail) {
    if ($mail) {
      $query = "SELECT nombre,mail FROM alumnos WHERE mail=?";
      $params = [$mail];
      $datos = Connection::buscar($query, "s", $params);
      if ($datos) {
        return new Alumno($datos['nombre'], $datos['mail']);
      }
    }
    return false;
  }

  public static function listarAlumnos() {
    $query = "SELECT nombre,mail FROM alumnos";
    $datos = Connection::listar($query);
    if ($datos) {
      return $datos;
    }
    return false;
  }

  public static function ingresarAlumno() {
  }

  public static function modificarAlumno() {
  }

  public static function eliminarAlumno() {
  }
}
