<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercícios PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        // Capturando os dados do Formulário Retroalimentado
        $precoProduto = $_GET['precoProduto']?? 0;
        $reajuste = $_GET['reajuste']?? 0;
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER ['PHP_SELF']?>" method="get">
            <label for="precoProduto"> Preço do Produto (R$)</label>
            <input type="number" name="precoProduto" id="precoProduto" value = "<?=$precoProduto?>">

            <label for="reajuste">Qual será o percentual de reajuste? (<strong><?=$reajuste?>%</strong>)</label>
            <input type="range" name="reajuste" id="reajuste" value = "<?=$reajuste?>">

            <input type ="submit" value ="Reajustar">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado do Reajuste</h2>
        <?php
            $precoFinal = $precoProduto * ($reajuste / 100) + $precoProduto;

            echo "O produto que custava R$ ". number_format($precoProduto, 2, ",", ".") ." com <strong>". $reajuste ."% de aumento</strong> vai passar a custar <strong>R$". number_format($precoFinal, 2, ",", "."). "</strong> a partir de agora.";

        ?>
    </section>
</body>
</html>