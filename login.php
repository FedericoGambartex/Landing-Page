<?php 
session_start();
include('conexion.php');

// Obtén los valores del formulario de inicio de sesión
$user = $_POST['usuario'];
$pass = $_POST['password'];

// Preparar la consulta SQL para evitar inyección SQL
$stmt = $conn->prepare("SELECT * FROM usuarios WHERE usuario = BINARY ? AND password = BINARY ?");
$stmt->bind_param("ss", $user, $pass);
$stmt->execute();
$resultado = $stmt->get_result();

// Verificar si la consulta encontró un usuario con esas credenciales
if ($resultado->num_rows > 0) {
    $fila = $resultado->fetch_assoc();
    $_SESSION['sesion'] = true;
    $_SESSION['user'] = $fila['usuario'];
    $_SESSION['nombre'] = $fila['nombre'];
    $_SESSION['apellido'] = $fila['apellido'];
    $_SESSION['email'] = $fila['email'];
    $_SESSION['foto'] = $fila['avatar'];

    header("Location: index.php"); // Redirige a la página de index.php
    exit();
} else {
    echo "Usuario o contraseña incorrectos.";
}
$stmt->close();
$conn->close();
?>
