<?php

class Alumno {
  protected $mail;
  protected $nombre;

  function __construct($mail, $nombre) {
    $this->mail = $mail;
    $this->nombre = $nombre;
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
