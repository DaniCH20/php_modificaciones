<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animales Ver</title>
  <link rel="stylesheet" href="estilo.css">

</head>

<body>


    <?php
    echo "<table border='1' style='border-collapse: collapse; width: 50%; text-align: left;'>";
    echo "<thead>
        <tr>
            <th>Tipo</th>
            <th>Edad</th>
            <th>Peso</th>
        </tr>
      </thead>
      <tbody>";

    if (($handle = fopen("animales.csv", "r")) !== FALSE) {
        // Leemos línea por línea
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            // $data es un array: [0] => Tipo, [1] => Edad, [2] => Peso
            echo "<tr>";
            echo "<td>" . htmlspecialchars($data[0]) . "</td>";
            echo "<td>" . htmlspecialchars($data[1]) . "</td>";
            echo "<td>" . htmlspecialchars($data[2]) . "</td>";
            echo "</tr>";
        }
        fclose($handle);
        // htmlspecialchars(): Es buena práctica al mostrar datos externos para evitar que caracteres especiales rompan tu diseño o ejecuten scripts maliciosos.
    }

    echo "</tbody></table>";
    ?>
        <div class="nav-container">
        <a href="animales_form.php" class="btn btn-nuevo">+ Registrar Otro Animal</a>
        <a href="index.php" class="btn btn-volver">Ir al Inicio</a>
    </div>


</body>

</html>