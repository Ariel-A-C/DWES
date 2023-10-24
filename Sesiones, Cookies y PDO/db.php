<?php

$conexion = new PDO('mysql:host=db.fmesasc.com;dbname=daw2', 'daw2', 'Gimbernat');

$usuarios = $conexion->query("SELECT * FROM aalvaroc1_usuarios");

foreach($usuarios as $fila){
    echo $fila['id'] . " - " .$fila['name'] . " - " .$fila['email'] . " - " .$fila['birthday'] . " - " .$fila['is_admin']. '<br>';
}
echo "-------" . '<br>';

$sql = "SHOW TABLES";
$stmt = $conexion->prepare($sql);
$stmt->execute();

$tables = $stmt->fetchAll(PDO::FETCH_COLUMN);

foreach ($tables as $table) {
    echo $table . "<br>";

    $sql = "DESCRIBE $table";
    $stmt = $conexion->prepare($sql);
    $stmt->execute();

    $columns = $stmt->fetchAll(PDO::FETCH_COLUMN);

    foreach ($columns as $column) {
        echo "- " . $column . "<br>";
    }
}
?>