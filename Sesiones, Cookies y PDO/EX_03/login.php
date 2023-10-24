<?php
session_start();

if (isset($_POST['usuario'])) {
    $_SESSION['usuario'] = $_POST['usuario'];
}
$_SESSION['puntos_acumulados'] = 0;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
<h1>Log In</h1>
<form method="POST">
    <label>Nombre de usuario: <input type="text" name="usuario"></label>
    <button type="submit">Log In</button>
</form><br>
<a href="index.php">Index</a><br>
<a href="filler.php">Filler page</a>
</body>
</html>