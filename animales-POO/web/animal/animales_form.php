<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Animales Form</title>
  <link rel="stylesheet" href="estilo.css">
</head>

<body>
<form action="animales_guardar.php" method="get">
    <h2>Nuevo Animal</h2>

    <label for="tipo">Tipo de Animal:</label>
    <input type="text" id="tipo" name="tipo" placeholder="Ej: Perro, Gato..." required>

    <label for="edad">Edad (años):</label>
    <input type="number" id="edad" name="edad" placeholder="0" required>

    <label for="peso">Peso (kg):</label>
    <input type="number" step="0.1" id="peso" name="peso" placeholder="0.0" required>

    <button type="submit">Guardar Registro</button>
  </form>

  <a href="animales_ver.php" class="btn-ver">
    🔍 Ver Lista de Animales
  </a>


</body>

</html>