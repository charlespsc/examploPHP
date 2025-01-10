<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<main>
    <h1>Trabalhando com números aleatórios</h1>
    <?php
    $aleatorio = mt_rand(0, 100);
    // rand() = 1951 - Linear Congrential Generator
    // Lenta nas versões abaixo da v7
    // mt_rand() - 1997 - Mersenne Twister (recomendada)
    // random_int() - gera números aleatórios criptograficamente seguros (lento)

    print("Gerando número aleatório entre 0 e 100");
    print("<br>O valor gerado foi: $aleatorio ");

    ?>
    <br><br>
    <input type="submit" value="Gerar outro">
</main>
</body>
</html>
 