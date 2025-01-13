<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<main>
    <h1>Resultado Final</h1>
    <p>
    <?php
        $numero = $_GET["num"]?? 0;
        $antecesor = $numero - 1;
        $sucessor = $numero + 1;

    print("O número escolhido foi <strong>$numero</strong>");
    print("<br>O seu <em>antecesor</em> é $antecesor");
    print("<br>O seu <em>sucesor</em> é $sucessor");

    ?>
    </p>
    <button ONCLICK="javascript:window.location.href='index.html'">&#x2B05; Voltar</button>

</main>
</body>
</html>
 