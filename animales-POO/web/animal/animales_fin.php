<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>animales Fin</title>
    <link rel="stylesheet" href="estilo.css">
    
</head>

<body>
    <?php
    if (isset($_GET['status']) && $_GET['status'] == 'success') {
        echo "<p style='color: green;'>¡Animal guardado correctamente en el CSV!</p>";
    }

    ?>


    <div class="nav-container">
        <a href="animales_form.php" class="btn btn-nuevo">+ Registrar Otro Animal</a>
        <a href="index.php" class="btn btn-volver">Ir al Inicio</a>
    </div>


</body>

</html>