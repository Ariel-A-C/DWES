<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EX_01</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label>Cadena de texto:</label>
        <input name="text" required>
        <button type="submit">Enviar</button>
    </form>

    <?php
        if (isset($_POST["text"])) {
            $text = $_POST["text"];
            $len = strlen($text);

            echo "Longitud: $len";
        }
    ?>
</body>
</html>
