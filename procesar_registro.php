<?php
// Conexión a la base de datos (ajusta los parámetros según tu configuración)
$conexion = new mysqli("localhost", "root", "", "test");

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error en la conexión: " . $conexion->connect_error);
}

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$contraseña = $_POST['contraseña'];

// Insertar datos en la tabla
$sql = "INSERT INTO usuarios (nombre, contraseña) VALUES ('$nombre', '$contraseña')";

if ($conexion->query($sql) === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error al registrar: " . $conexion->error;
}

// Cerrar la conexión
$conexion->close();
header("Location:login.php");
?>