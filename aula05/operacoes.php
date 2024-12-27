<?php
$num1 = 2;
$num2 = 3;

$soma = $num1 + $num2;

echo "A soma de num1(2) e num2(3) é $soma. <br>";
echo "A soma de num1(2) e num2(3) vale " . ($num1 + $num2). "<br>";

echo "A subtração de num1(2) e num2(3) vale " . ($num1 - $num2). "<br>";
echo "A multiplicação de num1(2) e num2(3) vale " . ($num1 * $num2). "<br>";
echo "A divisão de num1(2) e num2(3) vale " . ($num1 / $num2). "<br>";
echo "O módulo de num2(3) e num2(2) vale " . ($num2 % $num1). "<br>";

# Passando valores pela URL: ...operacoes.php?a=3&b=2
$n1 = $_GET["a"];
$n2 = $_GET["b"];

echo "<h2> Valores recebidos: $n1 e $n2</h2>";

