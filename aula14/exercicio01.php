<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio em PHP</title>
</head>
<body>
<b>Exercício 01 -</b> Criar um <b>PROCEDIMENTO</b> que <b>some</b> dois valores numéricos inteiros.
<br><br>
<div>
    <?php
        function soma($a, $b) {
            $s = $a + $b;
            echo "<p>A soma vale $s</p>";
        }
        soma(10, 20);
        soma(8, 2);
        $x = 9;
        $y = 15;
        soma($x, $y);
    ?>
</div>
</body>
</html>

