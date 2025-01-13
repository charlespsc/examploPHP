<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>

</header>
<main>
    <h1>Conversor de Moedas v1.0</h1>
    <?php
    // Cotação manual
    $cotacao = 5.17;
    $reais = $_GET["num"];
    $dolar = $reais / $cotacao;

    // Mostra o resultado
    //print("Seus R$ ". number_format($reais, 2, ",", "."). " equivalem a US$". number_format($dolar, 2, ".", ","));

    // Formatação de moedas com internacionalização!
    // Biblioteca intl (internacionalization PHP)
    $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

    echo "<p>Seus ". numfmt_format_currency($padrao, $reais, "BRL"). " equivalem a  <strong>". numfmt_format_currency($padrao, $dolar, "USD"). "</strong></p>";

    echo "<br><strong>*Cotação fixa de R\$ $cotacao</strong> informada diretamente no código.";

    ?>
    <button onclick="javascript:history.back()">Voltar</button>

</main>
</body>
</html>
 