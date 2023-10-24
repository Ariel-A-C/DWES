<!--Configure una base de datos para tener usuarios.
Los usuarios tendrán un nombre, un correo (identificador de la plataforma),
una contraseña, fecha de nacimiento, permisos (si son o no administradores)
y una imagen (que, por el momento, no tendrá ningún valor).-->

<?php

$conexion = new PDO('mysql:host=db.fmesasc.com;dbname=daw2', 'daw2', 'Gimbernat');


$sql = "CREATE TABLE IF NOT EXISTS aalvaroc1_usuarios (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL,
        birthday DATE,
        is_admin BOOLEAN,
        image LONGBLOB
    )";

$conexion->exec($sql);

echo "Table 'usuarios' created successfully.";

?>