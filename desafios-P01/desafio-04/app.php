<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 04 - PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<main>
    <h1>Conversor de Moedas v2.0</h1>
    <pre>
    <?php
    //Cotação vinda da API do Banco Central
    $inicio = date("m-d-Y", strtotime("-7 days"));
    $fim = date("m-d-Y");
    $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

    $dados = json_decode(file_get_contents($url), true);

    $cotacao = $dados["value"] [0] ["cotacaoCompra"];

    $reais = $_GET["num"];
    $dolar = $reais / $cotacao;

    // Formatação de moedas com internacionalização!
    $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

    echo "<p>Seus ". numfmt_format_currency($padrao, $reais, "BRL"). " equivalem a  <strong>". numfmt_format_currency($padrao, $dolar, "USD"). "</strong></p>";

    echo "<br>Cotação do dólar hoje <strong>". number_format($cotacao, 2). "</strong>, informada diretamente da API do Banco Central.";


    ?>
        </pre>
    <button onclick="javascript:history.back()">Voltar</button>

</main>
</body>
</html>
 