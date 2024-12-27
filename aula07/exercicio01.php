<?php
echo "<b>Exercício 01 -</b> Permitir que o usuário escolha entre somar e multiplicar dois números.";
echo "<br><br>";

$num1 = $_GET["num1"];
$num2 = $_GET["num2"];
$tipo = $_GET["tipo"];

echo "Os valores passados foram $num1 e $num2 <br>";
$res = ($tipo == "s") ? $num1 + $num2 : $num1 * $num2;
echo "O resultado será $res";
