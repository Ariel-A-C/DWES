<?php
class SensorController {
    public $ID;
    public $value;

    function evaluate($formula) {
        $sensor = $this->value;
        $result = eval("return $$formula;");

        return $result;
    }
}
?>