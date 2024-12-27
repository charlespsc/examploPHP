<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title> Exercício PHP</title>
</head>
<body>
<div>
    <?php
    echo "<b>Exercício 01 -</b> Ler o dia da semana(2-8) e mostrar se precisa ou não ir para escola.";
    echo "<br><br>";

    $d = isset($_GET["ds"])?$_GET["ds"]:0;
    switch ($d) {
        case 2:
        case 3:
        case 4:
        case 5:
        case 6:
            echo "Levanta e vai estudar.";
            break;
        case 7:
        case 8:
            echo "Descanse!";
            break;
        default:
            echo "Dia da semana inválido.";
    }

    ?>
    <br><br>
    <a href="javascript:history.go(-1)">Voltar</a>
</div>
</body>
</html>





