<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $birthday = $_POST["birthday"];
    $is_admin = false;

    // Conectar a la base de datos
    $conexion = new PDO('mysql:host=db.fmesasc.com;dbname=daw2', 'daw2', 'Gimbernat');

    // Insertar los datos en la tabla 'aalvaroc1_usuarios'
    $sql = "INSERT INTO aalvaroc1_usuarios (name, email, password, birthday, is_admin) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conexion->prepare($sql);
    $stmt->execute([$name, $email, $password, $birthday, $is_admin]);

    echo "Registrado.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registro de Usuario</title>
</head>
<body>
<h2>Registro de Usuario</h2>
<form method="POST" action="registro.php">
    <label>Nombre:</label>
    <input type="text" name="name" required><br><br>
    <label>Correo electrónico:</label>
    <input type="email" name="email" required><br><br>
    <label>Contraseña:</label>
    <input type="password" name="password" required><br><br>
    <label>Fecha de nacimiento:</label>
    <input type="date" name="birthday" required><br><br>
    <input type="submit" value="Registrar">
</form>
</body>
</html>
