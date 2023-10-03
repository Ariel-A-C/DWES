<?php
class Empleado {
    public $nombre;
    public $sueldo;

    function __construct($nombre, $sueldo) {
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
    }
}
?>