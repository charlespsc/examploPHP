<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio em PHP</title>
</head>
<body>
<b>Exercício 01 -</b> Mostrar uma contagem progressiva de 1 até 10.
<br><br>
<div>
    <?php
    $contador = 1;
    do {
        echo " Contador: $contador <br>";
        $contador++;
    } while ($contador <= 10);
    ?>
</div>
<br><br>
<b>Exercício 02 -</b> Mostrar uma contagem regressiva de 10 até 1.
<br><br>
<div>
    <?php
    $contador = 10;
    do {
        echo " Contador: $contador <br>";
        $contador--;
    } while ($contador >= 1);
    ?>
</div>
</body>
</html>
