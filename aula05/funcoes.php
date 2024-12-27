<?php
# Passando valores pela URL: ...funcoes.php?x=2&y=3

$valor1 = $_GET["x"];
$valor2 = $_GET["y"];

echo "<h2>Valores recebidos: x = $valor1 e y = $valor2</h2>";

# Valor Absoluto:
echo "O valor absoluto (abs) de $valor1 é ". abs($valor1) . "<br>";

# Potenciação:
echo "O valor de $valor1<sup>$valor2</sup> é ". pow($valor1, $valor2) . "<br>";

# Raiz Quadrada:
echo "A raiz de $valor1 é ". sqrt($valor1) . "<br>";

# Arredondamentos:
echo "O valor de $valor2 arredondado é ". round($valor2) . "<br>";
//ceil (arred. p/ cima) floor (arrd. p/ baixo)

# Valor inteiro da variável
echo "A parte inteira de $valor2 é ". intval($valor2) . "<br>";

# Formatação
echo "O valor de $valor1 em moeda é R$ ". number_format($valor1, 2, ",", ".") . "<br>";
