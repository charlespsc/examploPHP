<?php
// Comentário inline
# Comentário inline

/*
 * Comentário em múltiplas linhas!
 */

echo "Exercício 02: Mostrar qual foi o ano anterior ao ano atual.";
echo "<br><br>";
$atual = $_GET['aa'];
echo "O ano atual é $atual" . " e o ano anterior é " . --$atual;

echo "<br><br>";
echo " -------------------------------------------------------------";
echo "<br>Variáveis: <br>";
$a1 = 3;
$b1 = $a1;
$b1 += 5;
echo '$a1 = 3;<br>';
echo '$b1 = $a1;<br>';
echo '$b1 += 5;<br>';
echo "<br>Variável (a1) vale " . $a1 . " e variável (b1) vale " . $b1;
echo "<br><br>";
echo "Variáveis referencidas:";
$a2 = 3;
$b2 = &$a2;
$b2 += 5;
echo "<br>Variável (a1) vale " . $a2 . " e variável (b1) vale " . $b2;
