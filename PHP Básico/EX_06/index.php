<!--
Dibuje un conjunto de asteriscos con bucles en PHP que devuelva el siguiente
resultado:
*                                     *
* *                                 * *
* * *                             * * *
* * * *                         * * * *
* * * * *                     * * * * *
* * * * * *                 * * * * * *
* * * * * * *             * * * * * * *
* * * * * * * *         * * * * * * * *
* * * * * * * * *     * * * * * * * * *
* * * * * * * * * * * * * * * * * * * *
* * * * * * * * *     * * * * * * * * *
* * * * * * * *         * * * * * * * *
* * * * * * *             * * * * * * *
* * * * * *                 * * * * * *
* * * * *                     * * * * *
* * * *                         * * * *
* * *                             * * *
* *                                 * *
*                                     *
-->

<?php

for ($i = 1; $i < 10; $i++) {
    echo str_repeat("*", $i) . str_repeat("&nbsp", 4 * (10-$i)) . str_repeat("*", $i) . '<br>';
}
for ($i = 10; $i > 0; $i--) {
    echo str_repeat("*", $i) . str_repeat("&nbsp", 4 * (10-$i)) . str_repeat("*", $i) . '<br>';
}

?>