<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0
">
    <title>Sumas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            color: #333;
        }

        form {
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h1>Sumas </h1>
    <form action="index.php" method="post">
        <label for="num1">Número 1:</label><br>
        <input type="number" id="num1" name="num1"><br><br>
        <label for="num2">Número 2:</label><br>
        <input type="number" id="num2" name="num2"><br><br>
        <input type="submit" value="Calcular Suma">

    </form>
    <?php
    if (isset($_POST['num1']) && isset($_POST['num2'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $suma = $num1 + $num2;
        echo "<p>La suma de $num1 y $num2 es: $suma</p>";
        $fp = fopen('datos.csv', 'a');
        $fields = array($num1, $num2, $suma);
        fputcsv($fp, $fields);
        fclose($fp);
    }


    ?>
    <table>
        <tr>
        <th>Num1</th>
        <th>Num2</th>
        <th>Suma</th>
        </tr>
        
        <?php
        if (($handle = fopen("datos.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                echo "<tr>";
                foreach ($data as $cell) {
                    echo "<td>" . htmlspecialchars($cell) . "</td>";
                }
                echo "</tr>";
            }
            fclose($handle);
        }
        ?>
        
    </table>
</body>

</html>