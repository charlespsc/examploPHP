<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title> Exercício PHP</title>
</head>
<body>
<div>
    <?php
    echo "<b>Exercício 01 -</b> Ler um número e qual operação realizar: dobro, cubo ou raiz quadrada.";
    echo "<br><br>";

    $numero = isset($_GET["numero"])?$_GET["numero"]:0;
    $op = isset($_GET["oper"])?$_GET["oper"]:1;

    switch ($op) {
        case 1:
            $resultado = $numero * 2;
            break;
        case 2:
            $resultado = $numero ^ 3;
            break;
        case 3:
            $resultado = sqrt($numero); // $numero ^ (1/2)
    }

    echo "O resultado da operação solicitada foi $resultado.";

    ?>
    <br><br>
    <a href="exercicio01.html">Voltar</a>
</div>
</body>
</html>





