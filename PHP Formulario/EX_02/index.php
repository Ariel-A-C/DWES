<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EX_02</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label>Operación:</label>
        <input name="operation" required>
        <button type="submit">Enviar</button>
    </form>

    <?php
        if (isset($_POST["operation"])) {
            $operation = $_POST["operation"];
            $result = eval("return $operation;");

            echo "Operación: $operation" . '<br>';
            echo "Resultado: $result";
        }
    ?>
</body>
</html>
