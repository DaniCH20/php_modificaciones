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
    <table border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Marca</th>
                <th>Precio</th>
            </tr>
        <?php
        require_once "Equipo.php";
        file('equipos.csv');
        $file = fopen('equipos.csv', 'r');
        while (($line = fgetcsv($file)) !== false) {
            $equipo = new Equipo($line[0], $line[1], $line[2]);
            echo"<tr>";
            $equipo->imprimir();
            echo "</tr>";
        }
        fclose($file);


        ?>
    </table>
    <button onclick="window.location.href='index.php'">Volver al Formulario</button>
</body>

</html>