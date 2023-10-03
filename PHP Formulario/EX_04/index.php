<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EX_04</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
        <label>Nombre:</label>
        <input name="name">
        <br>
        <label>Apellidos:</label>
        <input name="surname">
        <br>
        <label>Contraseña:</label>
        <input type="password" name="pswd"><br>
        <label>Alumno o Profesor:</label>
        <input type="checkbox" name="AP" value="Alumno"> Alumno
        <input type="checkbox" name="AP" value="Profesor"> Profesor
        <br>
        <label>Foto (Nombre del fichero):</label>
        <input type="file" name="image">
        <br>
        <label>Edad:</label>
        <input type="number" name="age">
        <br>
        <label>Comentarios:</label>
        <textarea name="comment"></textarea>
        <br>
        <input type="hidden" name="test" value="myPrueba">
        <br>
        <button type="submit">Enviar</button>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
            $surname = $_POST["surname"];
            $pswd = $_POST["pswd"];
            $AP = isset($_POST["AP"]) ? $_POST["AP"] : "";
            $image = isset($_FILES["image"]["name"]) ? $_FILES["image"]["name"] : "";
            $age = $_POST["age"];
            $comment = $_POST["comment"];
            $test = $_POST["test"];

            echo "Nombre: $name" . '<br>';
            echo "Apellidos: $surname" . '<br>';
            echo "Contraseña: $pswd" . '<br>';
            echo "Alumno o Profesor: $AP" . '<br>';
            echo "Foto (Nombre del fichero): $image" . '<br>';
            echo "Edad: $age" . '<br>';
            echo "Comentarios: $comment" . '<br>';
            echo "Campo oculto: $test" . '<br>';
        }
    ?>
</body>
</html>