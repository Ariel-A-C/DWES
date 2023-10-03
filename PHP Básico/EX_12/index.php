<!--
Prepare una función para comprobar si un número es primo.
-->

<?php

function isPrime ($num) {
    for ($i = 2; $i < $num/2+1; $i++) {
        if ($num % $i == 0) {
            echo "$num NO es primo.";
            return false;
        }
    }
    echo "$num es primo.";
    return true;
}

for ($i = 2; $i <= 37; $i++) {
    isPrime($i);
    echo '<br>';
}

?>