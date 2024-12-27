<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio em PHP</title>
</head>
<body>
<b>Exercício 03 -</b> Exibir a tabuada de um número escolhido pelo usuário de 1 a 10.
<br><br>
<div>
    <?php
    $v = isset($_GET["tabuada"])?$_GET["tabuada"]:0;
    echo "<h1>Mostrando a Tabuada de $v</h1>";
    $contador = 1;

    while ($contador <= 10) {
        $resultado = $v * $contador;
        echo "$v x $contador = $resultado<br>";
        $contador++;
    }

    ?>
    <br>
    <form method="get" action="exercicio03.html">
    <input type="submit" value="Voltar">
    </form>
</div>
</body>
</html>
