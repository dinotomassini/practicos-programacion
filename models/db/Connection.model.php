<?php

class Connection {
  private const DB_HOST = 'localhost';
  private const DB_USER = 'dino';
  private const DB_PASS = 'dino';
  private const DB_NAME = 'alumnnos';
  private const DB_PORT = 3306;
  private static $conn = null;

  private static function connect() {
    if (is_null(self::$conn)) {
      self::$conn = new mysqli(self::DB_HOST, self::DB_USER, self::DB_PASS, self::DB_NAME, self::DB_PORT);
    }
    return self::$conn;
  }

  private static function disconnect() {
    self::$conn->close();
    self::$conn = null;
  }

  public static function buscar($query, $typeParams, $params = []) {
    try {
      $db = self::connect();
      if ($db) {
        $stmt = $db->prepare($query);
        if ($stmt) {
          $stmt->bind_param($typeParams, ...$params);
          $result = $stmt->execute() ? $stmt->get_result() : false;
          if ($result) {
            $db->disconnect();
            return $result->fetch_assoc();
          }
        }
      }
      $error = $db->error;
      $db->disconnect();
      new Exception("Ocurrio un error durante el proceso de busqueda.\n" . $error);
    } catch (Exception $e) {
      return null;
    }
  }

  public static function listar($query) {
    try {
      $db = self::connect();
      if ($db) {
        $stmt = $db->prepare($query);
        if ($stmt) {
          $result = $stmt->execute() ? $stmt->get_result() : false;
          if ($result) {
            $db->disconnect();
            return $result->fetch_assoc();
          }
        }
      }
      $error = $db->error;
      $db->disconnect();
      new Exception("Ocurrio un error durante el proceso de busqueda.\n" . $error);
    } catch (Exception $e) {
      return null;
    }
  }

  public static function ingresar() {
  }

  public static function modificar() {
  }

  public static function eliminar($id) {
  }
}
