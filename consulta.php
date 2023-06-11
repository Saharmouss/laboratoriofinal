<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "alta";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM datos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Usuarios registrados</h2>";
    echo "<ul>";
    while ($row = $result->fetch_assoc()) {
        echo "<li>" . $row["NOMBRE"] . " " . $row["APELLIDO1"] . " " . $row["APELLIDO2"] . "</li>";
    }
    echo "</ul>";
} else {
    echo "No hay usuarios registrados.";
}

$conn->close();

// Enlace para volver al formulario de registro
echo "<a href='formulario.html'>Volver al formulario de registro</a>";
?>
