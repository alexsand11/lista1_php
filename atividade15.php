
<?php

$preço_base = $_GET ['a'];
$taxa_imposto = $_GET ['b'];

$valor_do_imposto = ($taxa_imposto / 100) * $preço_base;

$preço_final =$preço_base + $valor_do_imposto;


echo "o preço base é R$ ".  number_format($preço_base, 2, ',', ' ').
"<br>".
"a taxa imposto é ".  number_format($taxa_imposto, 2, ',', ' ').
"<br>".
"o valor do imposto é R$ ".  number_format($valor_do_imposto, 2, ',', ' ').
"<br>".
"o preço final é R$ ".  number_format($preço_final, 2, ',', ' ');



?>