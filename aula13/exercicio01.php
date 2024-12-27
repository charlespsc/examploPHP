<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio em PHP</title>
</head>
<body>
<b>Exercício 01 -</b> Mostrar várias contagens utilizando a estrutura for.
<br><br>
<div>
    <?php
        echo "<br>Contagem crescente: ";
            for ($i = 1; $i <= 10; $i++) {
            echo $i . "  ";
        }
        echo "<br>";
        echo "<br>Contagem decrescente: ";
            for ($i = 10; $i >= 1; $i--) {
            echo $i . "  ";
        }
    ?>
</div>
</body>
</html>
