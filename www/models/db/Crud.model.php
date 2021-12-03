<?php

require_once __DIR__ . "/../../config.php";
include_once ROOT_DIR . '/models/db/Connection.model.php';
include_once ROOT_DIR . '/models/alumno/Alumno.php';

class Crud {

  public static function buscarAlumno($mail) {
    if ($mail) {
      $query = "SELECT mail,nombre FROM alumnos WHERE mail=?";
      $params = [$mail];
      $datos = Connection::buscar($query, "s", $params);
      if ($datos) {
        return new Alumno($datos['mail'], $datos['nombre']);
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

  public static function ingresarAlumno($mail, $nombre) {
    if ($mail && $nombre) {
      $query = "INSERT INTO alumnos VALUES(?,?)";
      $params = [$mail, $nombre];
      $datos = Connection::ingresar($query, "ss", $params);
      if ($datos) {
        return new Alumno($mail, $nombre);
      }
      return false;

    }
  }

  public static function modificarAlumno($mail, $nombre) {
    if ($mail && $nombre) {
      $alumno = self::buscarAlumno($mail);
      if ($alumno) {
        $query = "UPDATE alumnos SET mail=?, nombre=? WHERE mail=?";
        $params = [$mail, $nombre, $mail];
        Connection::modificar($query, "sss", $params);
        return $alumno;
      }
    }
    return false;
  }

  public static function eliminarAlumno($id) {
    if ($id) {
      $alumno = self::buscarAlumno($id);
      if ($alumno) {
        $query = "DELETE FROM alumnos WHERE mail=?";
        $params = [$id];
        Connection::eliminar($query, "s",$params);
        return $alumno;
      }
    }
    return false;
  }

}
