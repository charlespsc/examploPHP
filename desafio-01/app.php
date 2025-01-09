<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>

</header>
<main>
    <h1>Resultado Final</h1>
    <?php
    $numero = $_GET["num"];
    $antecesor = $numero - 1;
    $sucessor = $numero + 1;

    print("O número escolhido foi $numero");
    print("<br>O seu antecesor é $antecesor");
    print("<br>O seu sucesor é $sucessor");

    ?>
    <p><a href="javascript:history.go(-1)">Voltar</a></p>

</main>
</body>
</html>
 