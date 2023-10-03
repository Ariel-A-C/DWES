<?php
require_once 'Empleado.php';
function Hacienda($Empleado) {
    echo "$Empleado->nombre";
    if ($Empleado->sueldo > 2000) {
        echo " debe pagar impuestos." . '<br>';
    } else {
        echo " no debe pagar impuestos." . '<br>';
    }
}

$empleado1 = new Empleado("Jose", 1500);
$empleado2 = new Empleado("Luis", 2500);

Hacienda($empleado1);
Hacienda($empleado2);
?>