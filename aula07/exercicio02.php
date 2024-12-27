<?php
echo "<b>Exercício 02 -</b> Verificar se as variáveis são IGUAIS ou IDÊNTICAS: ";
echo "<br>";
$var1 = 3;
$var2 = "3";
echo "<br>";
echo '$var1 = 3;';
echo "<br>";
echo '$var1 = "3";';
echo "<br>";
$result = ($var1 == $var2) ? "SIM" : "NÃO";
echo "<br>As variáveis A e B são iguais? => " . $result;

$result2 = ($var1 === $var2) ? "SIM" : "NÃO";
echo "<br>As variáveis A e B são identicas? => " . $result2;