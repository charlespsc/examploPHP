<?php
echo "<b>Exercício 03 -</b> Mostrar a situação de um aluno, de acordo com a sua média obtida.";
echo "<br><br>";
$nota1 = $_GET["n1"];
$nota2 = $_GET["n2"];

$media = ($nota1 + $nota2) / 2;
echo "A média entre $nota1 e $nota2 é $media";
echo "<br><br>";
echo "A situação do estudante é " . (($media >= 7 && $media <= 10) ? "APROVADO" : "REPROVADO");
echo "<br><br>";