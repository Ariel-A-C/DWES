<?php
require_once 'Producto.php';
date_default_timezone_set("Europe/Madrid");
$obj = new Producto(3893, 12.99);
$obj->setPrecio(11.49);
sleep(2); //puse esto para simular otro cambio de precio (y hora) pero causa algún problema al recargar
$obj->setPrecio(10.99);
?>