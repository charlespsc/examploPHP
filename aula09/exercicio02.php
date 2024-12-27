<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title> Exercício PHP</title>
</head>
<body>
<div>
    <?php
    echo "<b>Exercício 02 -</b> Ler o ano de nascimento de uma pessoa e mostrar se ela pode votar.";
    echo "<br><br>";

    $anoNascimento = isset($_GET["anoNascimento"]) ? $_GET["anoNascimento"] : 1900;
    $idade = date("Y") - $anoNascimento;
    echo "Você nasceu em $anoNascimento e tem $idade anos.<br><br>";

    if ($idade < 16) {
        $tipovoto = "não vota";
    }
    elseif (($idade >= 16 && $idade < 18) || ($idade >65)) {
        $tipovoto = "voto opcional";
    }
    else {
        $tipovoto = "voto obrigatório";
    }

    echo "Para essa idade, $tipovoto.";

    ?>
</div>
</body>
</html>