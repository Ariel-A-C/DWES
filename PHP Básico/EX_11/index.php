<!--
Crea una función que compruebe si todos los caracteres del string se encuentran en mayúsculas.
-->

<?php
function hasLowercase($str) {
    $chars = str_split($str);
    foreach ($chars as $char) {
        if (ctype_lower($char)) {
            echo "Hay algunos caracteres en minúsculas.";
            return false;
        }
    }
    echo "Todos los caracteres se encuentran en mayúsculas.";
    return true;
}

hasLowercase("Test String");

?>