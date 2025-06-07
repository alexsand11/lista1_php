
<?php

$nota1 = $_GET['a'];
$peso1 = $_GET['b'];
$nota2 = $_GET['c'];
$peso2 = $_GET['d'];
$nota3 = $_GET['e'];
$peso3 = $_GET['f'];


$media_ponderada = (($nota1 * $peso1) + ($nota2 * $peso2) + ($nota3 * $peso3)) / ($peso1 + $peso2 + $peso3);

echo "Sua media ponderada é ".  number_format($media_ponderada, 2, ',', ' ');

?>
