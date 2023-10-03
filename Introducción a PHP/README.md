# Introducción a PHP

El código en general me parece tan trivial que comentarlo sería una pérdida de tiempo.

### Ex 1
El ejercicio ha sido simplemente copiar y pegar el código de ejemplo en un fichero nuevo.

### Ex 2
La única dificultad del ejercicio ha sido entender la grámatica propia de PHP, aunque he acabado viendo que en gran medida se puede usar el mismo formato que en Java. La principal confusión es a la hora de declarar variables con el formato «var = isset(var)? var : value;».
Nota: en vez de usar 'perifericos' como variable he usado 'periferico'.

Ahora repasando todo el enunciado me he dado cuenta de que me he dejado un detalle: «Se debe de rellenar una variable llamada $shipping_price teniendo en cuentalos puntos anteriores.»
Podría rehacer el .php, pero es más rápido poner aquí que solo habría que añadir la siguiente línea cada vez que pone «echo "Los gastos de envío son 4.99€";».

$shipping_price = isset($shipping_price)? $shipping_price : 4.99;

También se especifica que el valor de $shopping_cart debería ser positivo, mas eso está fuera del alcance del ejercicio. Imagino que se haría o con «abs()» o con algo como «<input type="number" min="0">».