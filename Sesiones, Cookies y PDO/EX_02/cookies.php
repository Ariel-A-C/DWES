<html>
<body>


<?php

if ($_POST["lang"] == "español") {
    echo "Nombre de usuario: " . $_POST["username"] . '<br>';
    echo "Idioma: " . $_POST["lang"];
} elseif ($_POST["lang"] == "català") {
    echo "Nom d'usuari: " . $_POST["username"] . '<br>';
    echo "Idioma: " . $_POST["lang"];
} else {
    echo "Username: " . $_POST["username"] . '<br>';
    echo "Language: " . $_POST["lang"];
}

?>
</body>
</html>