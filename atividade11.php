


<?php

$preço_produto1 = $_GET['a'];
$quantidade_produto1 = $_GET['b'];
$preço_produto2 = $_GET['c'];
$quantidade_produto2 = $_GET['d'];

$subtotal_produto1 = $preço_produto1 * $quantidade_produto1;

$total_produto2 = $preço_produto2 * $quantidade_produto2;

$valor_total = $subtotal_produto1 + $total_produto2;

echo "Valor produto 1 = R$$preço_produto1 <br>".
"<br>".
"Quantidade produto 1 = R$$quantidade_produto1 <br>".
"<br>".
"valor total produto 1 = R$$subtotal_produto1 <br>".
"<br>".
"Valor produto 2 = R$$preço_produto2 <br>".
"<br>".
"Quantidade produto 2 = R$$quantidade_produto2 <br>".
"<br>".
"valor total produto 2 = R$$total_produto2 <br>".
"<br>".
"O valor total do carrinho é = R$$valor_total";
?>
