<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio em PHP</title>
</head>
<body>
<b>Exercício 02 -</b> Exibir a tabuada de um número escolhido pelo usuário de 1 a 10.
<br><br>
<div>
    <form method="get" action="02tabuada.php">
        <select name="num">
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "<option value='$i'>$i</option>";
            }
            ?>
        </select>

    <input type="submit" value="Tabuada">
    </form>
</div>
</body>
</html>