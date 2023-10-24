<?php

if (isset($_COOKIE['visitas'])) {
    $cookie_data = unserialize($_COOKIE['visitas']);
    $contador = $cookie_data['contador'];
    $ultima_hora = $cookie_data['hora'];

    if (time() - $ultima_hora >= 3600) {
        $contador = 1;
    } else {
        $contador++;
    }
} else {
    $contador = 1;
}

$cookie_data = serialize(['contador' => $contador, 'hora' => time()]);
setcookie('visitas', $cookie_data, time() + 3600);
?>

<!DOCTYPE html>
<html>
<head>
    <title>EX_01</title>
</head>
<body>
<p>Número de visitas: <?php echo $contador; ?></p>
</body>
</html>