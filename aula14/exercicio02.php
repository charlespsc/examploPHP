<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio em PHP</title>
</head>
<body>
<b>Exercício 02 -</b> Criar uma <b>FUNÇÃO</b> que <b>some</b> dois valores numéricos inteiros.
<br><br>
<div>
    <?php
    function soma($a, $b) {
        $s = $a + $b;
        return $s;
    }

    $x = 3;
    $y = 4;
    $r = soma($x, $y);
    echo "A soma entre $x e $y é igual a $r";
    ?>
</div>
</body>
</html>


