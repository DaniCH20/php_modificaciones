<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
</head>

<body>
    <form action="" method="get">
        <input type="number" name="numero1" placeholder="Introduce el primer número">
        <input type="number" name="numero2" placeholder="Introduce el segundo número">
        <input type="number" name="numero3" placeholder="Introduce el tercer número">
        <input type="submit" value="Enviar">
    </form>

    <?php
    if (isset($_GET["numero1"]) && isset($_GET["numero2"]) && isset($_GET["numero3"])) {
        $numero1 = $_GET["numero1"];
        $numero2 = $_GET["numero2"];
        $numero3 = $_GET["numero3"];
        $suma = $numero1 + $numero2 + $numero3;
        echo "La suma de los números es " . $suma;
    }
    if (isset($_GET["numero1"]) && isset($_GET["numero2"])) {
        $num1 = $_GET["numero1"];
        $num2 = $_GET["numero2"];

        $suma = $num1 + $num2;
        echo "La suma de los números es " . $suma;
    }
    ?>
</body>

</html>