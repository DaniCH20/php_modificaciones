<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Página Web</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <h1>Bienvenido a Mi Página Web</h1>
        <nav>
            <ul>
                <li><a href="#home">Inicio</a></li>
                <li><a href="#about">Acerca de</a></li>
                <li><a href="#contact">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <section id="home">
        <h2>Inicio</h2>
        <p>Esta es la sección de inicio de mi página web.</p>
    </section>

    <section id="about">
        <h2>Acerca de</h2>
        <p>Aquí puedes encontrar información sobre mí y mi trabajo.</p>
    </section>

    <section id="contact">
        <h2>Contacto</h2>
        <p>Puedes contactarme a través de este formulario:</p>
        <form action="index.php" method="post">
            <label for="name">Nombre:</label><br>
            <input type="text" id="name" name="name"><br><br>
            <label for="email">Correo Electrónico:</label><br>
            <input type="email" id="email" name="email"><br><br>
            <input type="submit" value="Enviar">
        </form>

    </section>
    <?php
        echo "<p>¡Gracias por visitar mi página web!</p>";
    ?>
    <footer>
        <p>&copy; 2024 Mi Página Web. Todos los derechos reservados.</p>
    </footer>
</html>