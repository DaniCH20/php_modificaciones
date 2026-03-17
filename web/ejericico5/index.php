<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form action="" method="get">
        <input type="date" name="fecha" placeholder="Introduce una fecha">
        <input type="submit" value="Enviar">
    </form>

    <?php
    if (isset($_GET["fecha"])) {
        $fecha = $_GET["fecha"];
		setlocale(LC_TIME, "spanish");
		$dia = strftime("%A", strtotime($fecha));
        echo "El día de la semana es " . $dia;
    }
    ?>
</body>
</html>