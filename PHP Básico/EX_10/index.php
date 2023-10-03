<!--
Crea una función que ordene un array de clave-valor.
La función tendrá 3 parámetros, el vector, el orden que queremos (ascendiente o descendiente)
y el elemento que se utiliza para ordenar (la clave o el valor).
-->

<?php

$array = array(
    "key 1" => "value",
    "second key" => "other value",
    "last key" => "another value"
);

function orderArray($array, $order, $element) {
    if ($order && $element) {
        ksort($array);
    } elseif ($order && !$element) {
        asort($array);
    } elseif (!$order && $element) {
        krsort($array);
    } elseif (!$order && !$element) {
        arsort($array);
    }
    return $array;
}
//order: true=asc | false=desc
//element: true=key | false=value
$ordered = orderArray($array, true, true);
foreach ($ordered as $key => $val) {
    echo "$key = $val" . '<br>';
}



?>