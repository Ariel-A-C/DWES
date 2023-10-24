<?php
session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: login.php"); //si están en la misma carpeta
    exit();
}

$conexion = new PDO('mysql:host=db.fmesasc.com;dbname=daw2', 'daw2', 'Gimbernat');

$usuariosPorPagina = 3;
$paginaActual = isset($_GET["page"]) ? $_GET["page"] : 1;
$inicio = ($paginaActual - 1) * $usuariosPorPagina;

$sql = "SELECT * FROM aalvaroc1_usuarios LIMIT $inicio, $usuariosPorPagina";
$stmt = $conexion->query($sql);
$usuarios = $stmt->fetchAll();

$sql = "SELECT COUNT(*) as total FROM aalvaroc1_usuarios";
$stmt = $conexion->query($sql);
$result = $stmt->fetch();
$totalUsuarios = $result["total"];

$totalPaginas = ceil($totalUsuarios / $usuariosPorPagina);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Listado de Usuarios</title>
</head>
<body>
<h2>Listado de Usuarios</h2>
<p>Bienvenido, <?php echo $_SESSION["user_name"]; ?>  |  <a href="logout.php">Cerrar sesión</a></p>

<ul>
    <?php foreach ($usuarios as $usuario) : ?>
    <li><?php echo $usuario["name"]; ?></li>
    <?php endforeach; ?>
</ul>

<?php if ($totalPaginas > 1) : ?>
<ul class="pagination">
    <?php for ($i = 1; $i <= $totalPaginas; $i++) : ?>
    <li<?php if ($i == $paginaActual) echo ' class="active"'; ?>>
    <a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
    </li>
    <?php endfor; ?>
</ul>
<?php endif; ?>
</body>
</html>
