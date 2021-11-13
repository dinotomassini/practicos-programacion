<?php

class Alumno {
  protected $nombre;
  protected $mail;

  function __construct($nombre, $mail) {
    $this->nombre = $nombre;
    $this->mail = $mail;
  }

  function setNombre($nombre) {
    $this->nombre = $nombre;
  }

  function getNombre() {
    return $this->nombre;
  }

  function setMail($mail) {
    $this->mail = $mail;
  }

  function getMail() {
    return $this->mail;
  }
}
