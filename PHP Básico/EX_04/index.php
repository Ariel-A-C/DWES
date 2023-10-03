<!--
Escriba un programa que indique la longitud máxima y mínima de un array de cadenas de texto.
-->

<?php

$array = ["Primera cadena de texto", "La segunda cadena", "Cadena número 3",
    "Cadena en cuarta posición", "La quinta", "Última cadena de texto"];

$max = strlen($array[0]);
$min = strlen($array[0]);

foreach ($array as $cadena) {
    if (strlen($cadena) >= $max) {
        $max = strlen($cadena);
    } elseif (strlen($cadena) <= $min) {
        $min = strlen($cadena);
    }
}

echo "La longitud máxima es de " . $max . " y la mínima es de " . $min . ".";

?>