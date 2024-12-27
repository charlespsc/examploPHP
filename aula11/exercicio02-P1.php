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
    <form method="get" action="exercicio02-P2.php">
        <?php
        $cont = 1;
        while ($cont <= 5) {
            echo "Valor $cont: <input type='number' name='valor$cont' max='100' min='0' value='0'/><br><br>";
            $cont++;
        }
        
        ?>
        <input type="submit" value="Enviar" />
    </form>
</div>
</body>
</html>
