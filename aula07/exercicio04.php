<?php
echo "<b>Exercício 04 -</b> Mostrar se um eleitor é obrigado a votar ou não.";
echo "<br><br>";
$ano = $_GET["ano"];
$idade = 2024 - $ano;
$tipo = ($idade>=18 && $idade<65)?"OBRIGATÓRIO":"NÃO OBRIGATÓRIO";

echo "Quem nasceu em $ano tem $idade anos.";
echo " E dessa forma seu voto é $tipo";
