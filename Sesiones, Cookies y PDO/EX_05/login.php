<?php
session_start(); // Iniciar la sesión

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Conectar a la base de datos
    $conexion = new PDO('mysql:host=db.fmesasc.com;dbname=daw2', 'daw2', 'Gimbernat');

    // Verificar las credenciales del usuario
    $sql = "SELECT * FROM aalvaroc1_usuarios WHERE email = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user["password"])) {
        // Iniciar sesión
        $_SESSION["user_id"] = $user["id"];
        $_SESSION["user_name"] = $user["name"];
        $_SESSION["is_admin"] = $user["is_admin"];

        // Redirigir a la página de inicio o hacer lo que sea necesario
        header("Location: index.php");
        exit();
    } else {
        echo "Credenciales incorrectas. Intenta de nuevo.";
    }
}

// Formulario de inicio de sesión
?>
<!DOCTYPE html>
<html>
<head>
    <title>Iniciar Sesión</title>
</head>
<body>
<h2>Iniciar Sesión</h2>
<form method="POST" action="login.php">
    <label>Correo electrónico:</label>
    <input type="email" name="email" required><br><br>
    <label>Contraseña:</label>
    <input type="password" name="password" required><br><br>
    <input type="submit" value="Iniciar Sesión">
</form>
</body>
</html>
