<!--
Los principales idiomas del mundo se pueden identificar mediante dos o tres letras,
de esta manera, evitamos problemas al escribir el nombre completo a nivel informático.
Estos códigos, se encuentran recogidos en el código ISO 639-1,
y los puedes encontrar también, como identificar países con códigos en el ISO-3166-1.
Crea un array asociativo con 10 países, que contenga como identificador al código utilizado por ISO-3166 alfa-3
y dentro tenga otro array con el nombre del país y su código numérico.
Muestra un listado que contenga el nombre de los países, su código correspondiente. Por ejemplo:
El país España utiliza el código alfa-3 ESP con código numérico: 724.
El país Andorra utiliza el código alfa-3 AND con código numérico: 020.

Explique el código, muéstrelo y añada captura del resultado.
-->

<?php

$codigos = [
    "BLM" => ["San Bartolomé", 652],
    "CXR" => ["Isla de Navidad", 162],
    "ESH" => ["República árabe Saharaui Democrática", 732],
    "IOT" => ["Territorio Británico del Océano índico", 86],
    "MNP" => ["Islas Marianas del Norte", 580],
    "NIU" => ["Niue", 570],
    "PYF" => ["Polinesia Francesa", 258],
    "SGS" => ["Islas Georgias y Sandwich del Sur", 239],
    "SHN" => ["Sint Helena, Ascension and Tristan da Cunha", 654],
    "WLF" => ["Wallis y Futuna", 876]
];

foreach ($codigos as $id => $pais) {
    echo "El país " . $pais[0] . " utiliza el código alfa-3 " . $id . " con código numérico: " . $pais[1] . "." . '<br>';
}

?>