<?php

class Connection {
  private const DB_HOST = '172.21.0.2';
  private const DB_USER = 'dino';
  private const DB_PASS = 'dino';
  private const DB_NAME = 'alumnosdb';
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
            self::disconnect();
            return $result->fetch_assoc();
          }
        }
      }
      $error = $db->error;
      self::disconnect();
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
            self::disconnect();
            return $result;
          }
        }
      }
      $error = $db->error;
      self::disconnect();
      new Exception("Ocurrio un error durante el proceso de listado.\n" . $error);
    } catch (Exception $e) {
      return null;
    }
  }

  public static function ingresar($query, $typeParams, $params = []) {
    try {
      $db = self::connect();
      if ($db) {
        $stmt = $db->prepare($query);
        if ($stmt) {
          $stmt->bind_param($typeParams, ...$params);
          $result = $stmt->execute() ? $stmt->get_result() : false;
          if ($result) {
            self::disconnect();
            return $result->fetch_assoc();
          }
        }
      }
      $error = $db->error;
      self::disconnect();
      new Exception("Ocurrio un error durante el proceso de ingreso.\n" . $error);
    } catch (Exception $e) {
      return null;
    }
  }

  public static function modificar($query, $typeParams, $params = []) {
    try {
      $db = self::connect();
      if ($db) {
        $stmt = $db->prepare($query);
        if ($stmt) {
          $stmt->bind_param($typeParams, ...$params);
          $result = $stmt->execute() ? $stmt->get_result() : false;
          if ($result) {
            self::disconnect();
            return $result->fetch_assoc();
          }
        }
      }
      $error = $db->error;
      self::disconnect();
      new Exception("Ocurrio un error durante el proceso de modificacion.\n" . $error);
    } catch (Exception $e) {
      return null;
    }
  }

  public static function eliminar($query, $typeParams, $params = []) {
    try {
      $db = self::connect();
      if ($db) {
        $stmt = $db->prepare($query);
        if ($stmt) {
          $stmt->bind_param($typeParams, ...$params);
          $result = $stmt->execute() ? $stmt->get_result() : false;
          if ($result) {
            self::disconnect();
            return $result->fetch_assoc();
          }
        }
      }
      $error = $db->error;
      self::disconnect();
      new Exception("Ocurrio un error durante el proceso de eliminacion.\n" . $error);
    } catch (Exception $e) {
      return null;
    }
  }
}
