<?php

class Animal
{

  private $tipo;
  private $edad;
  private $peso;

  public function __construct($tipo, $edad, $peso)
  {
    $this->tipo = $tipo;
    $this->edad = $edad;
    $this->peso = $peso;
  }

  // Método para mostrar la información (ejemplo)
    public function obtenerFicha() {
        return "Este animal es un " . $this->tipo . ", tiene " . $this->edad . " años y pesa " . $this->peso . "kg.";
    }
}



?>