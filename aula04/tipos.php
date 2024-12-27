<?php
$idade = 45;
/* TYPECAST
$numero = (int) "Charles";
$numero = (int) "12Charles";
echo $numero;
*/
echo "<br>----- TYPECAST -----</br>";
$numero = (int) "12Charles";
echo $numero;
echo "<br>----- TYPECAST -----</br>";

$nome = "Charles";

echo "Nome: " . $nome . "<br>";
echo "Idade: " . $idade . "<br>";

echo $nome . " tem " . $idade . " anos!" . "<br>";
echo "$nome tem $idade anos!";
