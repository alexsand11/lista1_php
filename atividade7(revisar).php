<?php

$salario_base = $_GET['a'];
$percentual_aumento = $_GET['b'];

$valor_de_aumento =($salario_base * $percentual_aumento)/100 ;

$salario_final = $salario_base + $valor_de_aumento;

echo "O salario base era de R$$salario_base, mas com acrescimo de $percentual_aumento%, que equivale a R$$valor_de_aumento, o novo salario com aumento sera de R$$salario_final.";

?>