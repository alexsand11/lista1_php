
<?php

$temperatura_celsius = $_GET['a'];

$temperatura = ($temperatura_celsius * 9/5) + 32;

echo "a temperatura em fahrenheit é ".  number_format($temperatura, 2, ',', ' ');

?>