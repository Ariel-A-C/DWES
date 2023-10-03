<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EX_03</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label>Introduce un número:</label>
        <input name="num" required>
        <button type="submit">Enviar</button>
    </form>

    <?php
        if (isset($_POST["num"])) {
            $num = (int)$_POST["num"];
            for ($i = 1; $i <= $num; $i++) {
                if ($i == 1) {
                    echo "Escribiendo 1 línea" . '<br>';
                } else {
                    echo "Escribiendo $i líneas" . '<br>';
                }
            }
        }
    ?>
</body>
</html>
