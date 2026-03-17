<?php
require_once 'animales_clase.php';

// 1. Capturar y limpiar datos
if ($_SERVER["REQUEST_METHOD"] == "GET") {
  $tipo = htmlspecialchars($_GET['tipo']);
  $edad = htmlspecialchars($_GET['edad']);
  $peso = htmlspecialchars($_GET['peso']);

  // Más profesional 
  // Evitar null pounter exceptions
  //$tipo = isset($_GET['tipo']) ? htmlspecialchars($_GET['tipo']) : 'Desconocido';

  // 2. Instanciar la clase pasando las variables
  $miAnimal = new Animal($tipo, $edad, $peso);
  // Lo profesional sería que tenga un toList

  $fields = [
    $tipo,
    $edad,
    $peso
  ];
  
  $fp = fopen('animales.csv', 'a');
  fputcsv($fp, $fields, ',', '"', '');

  fclose($fp);

  // evitar reenvio de formulario
  // Solo funciona si elimino los echo
  header("Location: animales_fin.php?status=success");
  exit();



} else {
  echo "Acceso no permitido.";
}
?>