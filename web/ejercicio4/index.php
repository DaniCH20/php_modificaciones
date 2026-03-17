<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
    <style>
        #par {
            color: #00ff0d;
        }
        #impar {
            color: #ff0000;
        }
    </style>
</head>
<body>
    <form action="" method="get">
        <input type="number" name="numero" placeholder="Introduce un número">
        <input type="submit" value="Enviar">
    </form>

    <?php
    if (isset($_GET["numero"])) {
        $numero = $_GET["numero"];
        if ($numero % 2 == 0) {
            echo "<h3 id='par'>El número es par</h3>";
        } else {
            echo "<h3 id='impar'>El número es impar</h3>";
        }
    }
    ?>
</body>
</html>