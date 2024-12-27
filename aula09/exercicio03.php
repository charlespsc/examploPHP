<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title> Exercício PHP</title>
    <style>
        var {
            color: red;
        }
    </style>
</head>
<body>
<div>
    <?php
    echo "<b>Exercício 03 -</b> Pegar duas notas, gerar a média e mostrar a situação.";
    echo "<br><br>";

    $n1 = isset($_GET["n1"]) ? $_GET["n1"] : 0;
    $n2 = isset($_GET["n2"]) ? $_GET["n2"] : 0;

    $media = ($n1 + $n2) / 2;

    if ($media < 5) {
        $status = "REPROVADO";
    }
    elseif ($media >= 5 && $media < 7) {
        $status = "RECUPERAÇÃO";
    }
    elseif ($media >= 7 && $media < 10) {
        $status = "APROVADO";
    }
    else {
        $status = "ERRO: A média máxima é 10, favor verificar as notas!";
    }

    echo "A média entre <b>$n1</b> e <b>$n2</b> é igual a <b>$media</b><br>";
    echo "Situação do aluno: <b>$status</b><br><br>";

    ?>

    <form method="get" action="exercicio03.html">
        <input type="submit" value="Voltar">
    </form>

</div>
</body>
</html>