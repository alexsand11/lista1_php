<?php

$valor_original = $_GET['a'];
$percentual_desconto = $_GET['b'];

$valor_do_desconto = ( $valor_original * $percentual_desconto ) / 100 ;

$valor_final = $valor_original - $valor_do_desconto;

echo "O produto custava inicialmente R$$valor_original, mas com um desconto de $percentual_desconto%, que equivale a R$$valor_do_desconto, o preço final do produto foi de R$$valor_final";
?>
