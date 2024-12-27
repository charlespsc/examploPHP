<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio em PHP</title>
</head>
<body>
<b>Exercício 02 -</b> Script para calcular o fatorial de um número inteiro.
<br><br>
<div>
    <?php
    $v = isset($_GET["fatorial"])?$_GET["fatorial"]:1;
    echo "<h1>Calculando o Fatorial de $v</h1>";
    $contador = $v;
    $fatorial = 1;
    do {
        $fatorial = $fatorial * $contador;
        $contador--;
    } while ($contador >= 1);
    echo "<h2>Fatorial de $v = $fatorial</h2>";
    ?>
    <form method="get" action="exercicio02.html">
    <input type="submit" value="Voltar">
    </form>
</div>
</body>
</html>
