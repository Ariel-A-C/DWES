<?php
require_once 'Loggable.php';
class Producto {
    public $ID;
    public $precio;
    public function setPrecio($precio)
    {
        $this->log("Precio cambiado de " . $this->precio . "€ a " . $precio . "€ (" . date("h:i:sa") . ")" . '<br>');
        $this->precio = $precio;
    }
    public function __construct($ID, $precio)
    {
        $this->ID = $ID;
        $this->precio = $precio;
    }
    use Loggable;
}
?>