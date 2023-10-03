<!--
Crea un vector que contenga los nombres de los compañeros de clase, y muestra por
pantalla cada uno de ellos en una lista y el número de compañeros totales al final.
-->

<?php

$alumnos = ['Alice', 'Bob', 'Charlie', 'Dave', 'Erin', 'Frank'];

foreach ($alumnos as $alumno) {
    echo '<li>' . $alumno . '</li>';
}
echo "Número de compañeros totales: " . count($alumnos);
?>