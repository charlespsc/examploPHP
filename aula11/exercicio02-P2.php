<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio em PHP</title>
</head>
<body>
<b>Exercício 02 -</b> Criar dinamicamente 5 caixas de texto em um formulário.
<br><br>
<div>
    <?php
    $i = 1;
    while ($i <= 5) {
        $v = "num".$i;
        $url = "valor".$i;
        $$v = isset($_GET[$url]) ? $_GET[$url] : 0;
        $i++;
    }

    $i = 1;
    while ($i <= 5) {
        $v = "num".$i;
        echo "valor $i : " . $$v . "<br>";
        $i++;
    }

    ?>
</div>
</body>
</html>
