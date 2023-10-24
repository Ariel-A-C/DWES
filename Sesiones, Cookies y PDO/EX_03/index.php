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
    <title>Página Principal</title>
</head>
<body>
<h1>Index</h1>
<p>Puntos acumulados de<?php echo $usuario; ?>: <?php echo $_SESSION['puntos_acumulados']; ?></p>
<a href="filler.php">Filler page</a><br>
<a href="login.php">Log Out</a>
</body>
</html>


<!--Haz una página web que pase entre sus páginas el nombre del usuario y una variable (puntos_acumulados)
que se irá incrementando en 10 cada vez que el usuario de esa sesión pase entre las páginas.
La sesión se cerrará cuando el usuario vuelva a la página de Login.-->