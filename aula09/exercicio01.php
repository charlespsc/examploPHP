<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title> Exercício PHP</title>
</head>
<body>
<div>
    <?php
    echo "<b>Exercício 01 -</b> Ler o ano de nascimento de uma pessoa e mostrar se ela pode votar e dirigir.";
    echo "<br><br>";

    $anoNascimento = isset($_GET["anoNascimento"]) ? $_GET["anoNascimento"] : 1900;
    $idade = date("Y") - $anoNascimento;
    echo "Você nasceu em $anoNascimento e tem $idade anos.<br><br>";

    if ($idade >= 18) {
        $votar = " já pode votar";
        $dirigir = " já pode dirigir";
    }
    else {
        $votar = " não pode votar";
        $dirigir = " não pode dirigir";
    }

    echo "Com essa idade você $votar e também $dirigir.";

    ?>
</div>
</body>
</html>





