<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
    require_once "Equipo.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = htmlspecialchars($_POST['nombre']);
        $marca = htmlspecialchars($_POST['marca']);
        $precio = htmlspecialchars($_POST['precio']);

        echo "<h3>¡Datos recibidos con éxito!</h3>";
        echo "<br> nombre: " . $nombre;
        echo "<br> marca: " . $marca;
        echo "<br> precio: " . $precio;

        $miEquipo = new Equipo($nombre, $marca, $precio);

        echo "<p>Se va a cargar el siguiente <b>equipo</b> en la base de datos (csv):</p>";
        $fields = [
            $nombre,
            $marca,
            $precio
        ];
        $fp = fopen('equipos.csv', 'a');
        fputcsv($fp, $fields, ',', '"', '');

        fclose($fp);
    } else {
        echo "Acceso no permitido.";
    }

    ?>
    <button onclick="window.location.href='index.php'">Volver al Formulario</button>
</body>

</html>