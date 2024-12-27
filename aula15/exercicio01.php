<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio em PHP</title>
</head>
<body>
<div>
    <?php
    echo " <b>Exercício 01 -</b> Criar um <b>PROCEDIMENTO</b> que use a passagem de parâmetro por referência.";

    //function teste($x) {                      // Não passando A como referência!
    function teste(&$x) {                       // Passando A como referência! (usa o &)
       $x += 2;
       echo "<p>O valor de X é $x</p>";
    }

    $a = 3;
    teste($a);

    echo"<p>O valor de A é $a</p>"

    ?>
</div>
</body>
</html>


