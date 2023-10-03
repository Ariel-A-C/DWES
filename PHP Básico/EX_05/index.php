<!--
Dibuje un conjunto de asteriscos con bucles en PHP que devuelva el siguiente resultado:
*
* *
* * *
* * * *
* * * * *
* * * * * *
* * * * * * *
* * * * * * * *
* * * * * * * * *
* * * * * * * * * *
* * * * * * * * * *
* * * * * * * * *
* * * * * * * *
* * * * * * *
* * * * * *
* * * * *
* * * *
* * *
* *
*
-->

<?php

for ($i = 1; $i <= 10; $i++) {
    echo str_repeat("*", $i) . '<br>';
}
for ($i = 10; $i >= 1; $i--) {
    echo str_repeat("*", $i) . '<br>';
}

?>