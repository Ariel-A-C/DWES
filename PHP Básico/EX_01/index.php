<!--
Crea una página web en la que el título muestre “Bienvenido” y en la página se impriman 10 filas con PHP.
Cada fila debe tener el número de fila seguido de “estamos en segundo de DAW”. Es decir:
    1 estamos en segundo de DAW
    2 estamos en segundo de DAW
    3 estamos en segundo de DAW
    4 estamos en segundo de DAW
    5 estamos en segundo de DAW
    6 estamos en segundo de DAW
    7 estamos en segundo de DAW
    8 estamos en segundo de DAW
    9 estamos en segundo de DAW
    10 estamos en segundo de DAW
-->

<title>Bienvenido</title>

<?php

for ($i = 1; $i <= 10; $i++) {
    echo "$i estamos en segundo de DAW" . '<br>';
}

?>