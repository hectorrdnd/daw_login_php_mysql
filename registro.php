<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Registro</title>
</head>
<body>
<h2>Registro</h2>
<form action="procesar_registro.php" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" required><br>
    <label for="contraseña">Contraseña:</label>
    <input type="password" name="contraseña" required><br>
    <input type="submit" value="Registrar">
</form>
</body>
</html>
