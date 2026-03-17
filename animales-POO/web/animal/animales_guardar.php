<?php
require_once 'animales_clase.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Animales Guardar</title>
</head>

<body>

  <?php
  // 1. Capturar y limpiar datos
  if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $tipo = htmlspecialchars($_GET['tipo']);
    $edad = htmlspecialchars($_GET['edad']);
    $peso = htmlspecialchars($_GET['peso']);

    // Más profesional 
    // Evitar null pounter exceptions
    //$tipo = isset($_GET['tipo']) ? htmlspecialchars($_GET['tipo']) : 'Desconocido';

    echo "<h3>¡Datos recibidos con éxito!</h3>";
    echo "<br> tipo: " . $tipo;
    echo "<br> edad: " . $edad;
    echo "<br> peso: " . $peso;

    // 2. Instanciar la clase pasando las variables
    $miAnimal = new Animal($tipo, $edad, $peso);

    // 3. Mostrar el animal, desde funcion
    echo "<p>Se va a cargar el siguiente <b>animal</b> en la base de datos (csv):</p>";
    echo $miAnimal->obtenerFicha();

    $fields = [
      $tipo,
      $edad,
      $peso
    ];
    $fp = fopen('animales.csv', 'a');
    fputcsv($fp, $fields, ',', '"', '');

    fclose($fp);

  } else {
    echo "Acceso no permitido.";
  }
  ?>
</body>

</html>