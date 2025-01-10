<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<main>
    <h1>Trabalhando com números aleatórios</h1>
    <?php
    $min = 0;
    $max = 100;
    $aleatorio = mt_rand($min, $max);
    // rand() = 1951 - Linear Congrential Generator
    // Lenta nas versões abaixo da v7
    // mt_rand() - 1997 - Mersenne Twister (recomendada)
    // random_int() - gera números aleatórios criptograficamente seguros (lento)

    print("Gerando número aleatório entre $min e $max <br>O valor gerado foi: <strong>$aleatorio</strong>");

    ?>
    <button onclick="javascript:document.location.reload()">&#x1F504; Gerar número Aleatório</button>
</main>
</body>
</html>
 