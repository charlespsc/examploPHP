<?php

echo "<br>Variáveis Referenciadas (&): <br>";
$a = 3;
$b = &$a;
$b += 5;
echo '$a = 3;<br>';
echo '$b = &$a;<br>';
echo '$b += 5;<br>';
echo "<br>A Variável (a) vale " . $a;
echo "<br>A Variável (b) vale " . $b;