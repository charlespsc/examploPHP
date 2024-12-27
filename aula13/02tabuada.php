<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio em PHP</title>
</head>
<body>
<b>Exercício 02 -</b> Exibir a tabuada de um número escolhido pelo usuário de 1 a 10.
<br><br>
<div>
    <?php
        $n = isset($_GET["num"])?$_GET["num"]:1;
        for ($c = 1; $c <= 10; $c++) {
            $r = $n * $c;
            echo "$n x $c = " . $r . "<br>";
        }

    ?>
    <br>
    <form method="get" action="exercicio02.php">
        <input type="submit" value="Voltar">
    </form>
</div>
</body>
</html>