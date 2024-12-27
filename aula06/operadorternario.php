<?php

// OPERADOR TERNÁRIO
// expressão ? verdadeiro : falso

$a = 2;
$b = 30;

$maior = $a > $b ? $a : $b;
echo "O número maior é $maior";

$resultado = $a > $b ? $a+$b : $b-$a;
echo "<br>Resultado: $resultado";

$media = 6;
$status = $media < 7 ? "Recuperação" : "Aprovado";
echo "<br>Situação: $status";


