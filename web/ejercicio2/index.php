<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
</head>

<body>
    <form action="" method="POST">
        <label>nombre</label>
        <input type="text" name="nombre" placeholder="Introduce tu nombre">
        <label>apellido</label>
        <input type="text" name="apellido" placeholder="Introduce tu apellido">
        <input type="submit" value="Enviar">
    </form>

    <?php
    if (isset($_POST["nombre"]) && isset($_POST["apellido"])) {
        $nombre = $_POST["nombre"];
        $Apellido = $_POST["apellido"];

        echo "Hola, " . $nombre . $apellido . "!";
    }
    ?>
</body>

</html>