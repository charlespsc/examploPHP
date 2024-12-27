<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
    printf("14. Função: strtolower<br>");
    $nome="Elaine Cristine";
    $nome2=strtolower($nome);
    echo "Seu nome é $nome2";

    echo "<br><br>";
    printf("15. Função: srttoupper<br>");
    $nome="Elaine Cristine";
    $nome2=strtoupper($nome);
    echo "Seu nome é $nome2";

    echo "<br><br>";
    printf("16. Função: ucfirst<br>");
    $nome="elaine cristine";
    $nome2=ucfirst($nome);
    echo "Seu nome é $nome2";

    echo "<br><br>";
    printf("17. Função: ucwords<br>");
    $nome="elaine cristine";
    $nome2=ucwords($nome);
    echo "Seu nome é $nome2";

    ?>
</div>
</body>
</html>
 