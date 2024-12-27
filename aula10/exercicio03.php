<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estados e Regiões</title>
</head>
<body>
<h1>Estados do Brasil e suas Regiões</h1>

<?php
    $estado = isset($_GET["estado"])?$_GET["estado"]:0;

    // Associações de estados e regiões
    $regioes = [
        'Norte' => ['AC', 'AP', 'AM', 'PA', 'RO', 'RR', 'TO'],
        'Nordeste' => ['AL', 'BA', 'CE', 'MA', 'PB', 'PE', 'PI', 'RN', 'SE'],
        'Centro-Oeste' => ['DF', 'GO', 'MT', 'MS'],
        'Sudeste' => ['ES', 'MG', 'RJ', 'SP'],
        'Sul' => ['PR', 'RS', 'SC']
    ];

    // Verifica a qual região pertence o estado
    $regiaoEncontrada = null;
    foreach ($regioes as $regiao => $estados) {
        if (in_array($estado, $estados)) {
            $regiaoEncontrada = $regiao;
            break;
        }
    }

    if ($regiaoEncontrada) {
        echo "<p>O estado selecionado pertence à região: <strong>$regiaoEncontrada</strong>.</p>";
    } else {
        echo "<p>Por favor, selecione um estado válido.</p>";
    }
?>
<br>
<a href="javascript:history.go(-1)">Voltar</a>

</body>
</html>