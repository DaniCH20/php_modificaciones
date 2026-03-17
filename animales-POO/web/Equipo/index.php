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

    <form action="guardar.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre"><br><br>
        <label for="marca">Marca:</label>
        <input type="text" id="marca" name="marca"><br><br>
        <label for="precio">Precio:</label>
        <input type="number" id="precio" name="precio"><br><br>
        <input type="submit" value="Enviar">
    </form>
    <br><br>
    <a href="equipos_ver.php" class="btn-ver">
        <button>Ver Equipos Guardados</button>
    </a>
</body>

</html>