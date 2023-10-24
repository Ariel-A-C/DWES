<?php
session_start(); // Iniciar la sesión

if (isset($_SESSION['usuario'])) {
    $usuario = $_SESSION['usuario'];
    if (isset($_SESSION['puntos_acumulados'])) {
        $_SESSION['puntos_acumulados'] += 10; // Incrementar los puntos en 10
    }
} else {
    header("Location: login.php"); // Redirigir al usuario a la página de inicio de sesión si no está autenticado
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Filler page</title>
</head>
<body>
<h1>Filler page</h1>
<p>Puntos acumulados de<?php echo $usuario; ?>: <?php echo $_SESSION['puntos_acumulados']; ?></p>
<a href="index.php">Index</a><br>
<a href="login.php">Log Out</a>
</body>
</html>
