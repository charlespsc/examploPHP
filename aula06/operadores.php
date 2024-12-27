<?php
echo "Exercício 01: Aplicar 10% de aumento ao preço de um produto.";
echo "<br><br>";
$preco = $_GET['p'];
echo "O preço do produto é R$" . number_format($preco, 2, ",", ".");
$preco  += $preco * 10/100;
echo "<br>E o novo preço com 10% de aumento será R$" . number_format($preco, 2, ",", ".");
?>