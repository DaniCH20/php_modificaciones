<?php
$host = getenv('DB_HOST');
$user = getenv('DB_USER');
$pass = getenv('DB_PASS');
$db   = getenv('DB_NAME');

echo "<br> - host:".$host;
echo "<br> - user:".$user;
echo "<br> - pass:".$pass;
echo "<br> - db:".$db;

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$sql = "SELECT id, nombre, especie FROM animales";
$result = $conn->query($sql);
?>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Especie</th>
    </tr>
    <?php while($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['nombre']; ?></td>
        <td><?php echo $row['especie']; ?></td>
    </tr>
    <?php endwhile; ?>
</table>

<?php $conn->close(); ?>