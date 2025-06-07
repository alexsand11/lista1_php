

<?php

$peso = $_GET['a'];
$altura = $_GET['b'];

$IMC = $peso / ($altura * $altura);

echo "seu IMC é $IMC";
