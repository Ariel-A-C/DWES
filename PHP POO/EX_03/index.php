<?php
require_once 'SensorController.php';

$formula1 = 'sensor + 123';
$formula2 = 'sensor * 2 / 3';
$formula3 = 'sensor - 1';

for ($i = 1; $i <= 5; $i++) {
    $controller = new SensorController();
    $controller->ID = $i;
    $controller->value = rand(0, 4096);

    echo "Sensor $i: $controller->value" . '<br>';
    echo '<pre>';
    echo "Result for formula '$formula1': " . $controller->evaluate($formula1) . "\n";
    echo "Result for formula '$formula2': " . $controller->evaluate($formula2) . "\n";
    echo "Result for formula '$formula3': " . $controller->evaluate($formula3) . "\n";
    echo "\n";
    echo '</pre>';
}
?>