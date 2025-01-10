<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<main>
    <h1>Analisador de Número Real</h1>
    <?php
        $num = $_GET["num"];

        echo "<p>Analisando o número <strong>". number_format($num, 3, ",", ".") ."</strong> informado pelo usuário:</p>";

        $int = (int) $num;
        $fra = $num - $int;

        echo "<ul> <li> A parte inteira do número é <strong>". number_format($int, 0, ",", ".") ."</strong> </li>";
        echo "<li> A parte fracionaria do número é <strong>". number_format($fra, 3, ",", ".") ."</strong> </li> </ul>";
    ?>

    <button onclick="javascript:history.back()">Voltar</button>
</main>

</body>
</html>