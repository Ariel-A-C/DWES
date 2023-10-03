<!--
1. Si la compra es inferior de 20 euros, existen varias opciones:
    i. Si los componentes son cables, mostrará: “No se puede enviar”.
    ii. Si el producto es un periférico, mostrará: “Los gastos de envío son 4.99€”.
2. Si la compra se encuentra entre 20 y 50 euros, indicará: “Los gastos de envío son 4.99€”.
3. Si el pedido es superior a 50€ mostrará un mensaje de que los portes son gratis.
4. Si la compra supera los 150€ deberá de dar un código de descuento para la siguiente compra llamado: GIMBERNAT_20_%

Para el problema, tenemos varios datos:
    • El importe total de la cesta lo guardaremos en la variable $shopping_cart con un número decimal positivo, por ejemplo: 9.95.
    • En la variable $tipo nos viene un texto que puede ser 'cables' o 'perifericos'.
    • Se debe de rellenar una variable llamada $shipping_price teniendo en cuentalos puntos anteriores.

// Variables de ejemplo (estas deberán ser modificadas para probar diferentes casos)
$shopping_cart = isset($shopping_cart)? $shopping_cart : 9.95;
$tipo = isset($tipo)? $tipo : 'cables';
-->

<?php
$shopping_cart = isset($shopping_cart)? $shopping_cart : 274.95;
$tipo = isset($tipo)? $tipo : 'cables';

if ($shopping_cart < 20) {
    if ($tipo == 'cables') {
        echo "No se puede enviar";
    } elseif ($tipo == 'periferico') {
        echo "Los gastos de envío son 4.99€";
    }
} elseif ($shopping_cart < 50) {
    echo "Los gastos de envío son 4.99€";
} else {
    echo "Los portes son gratis";
}
if ($shopping_cart > 150) {
    $codigoDescuento = isset($codigoDescuento)? $codigoDescuento : 'GIMBERNAT_20_%';
    echo "<br> Has obtenido un código de descuento del 20%";
}
?>