<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "gestion";
$password = "1234";
$dbname = "gestion";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Recuperar valores del formulario
$usuario = $_POST['user'];
$contrasena = $_POST['passwd'];

// Consulta SQL para verificar las credenciales
$sql = "SELECT * FROM Usuario WHERE Usuario='$usuario' AND idUser='$contrasena'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Usuario autenticado correctamente
    echo "¡Bienvenido!";
} else {
    // Usuario no autenticado
    echo "Usuario o contraseña incorrecto";
}

$conn->close();
?>

