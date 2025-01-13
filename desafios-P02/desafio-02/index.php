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
        $salario = $_GET['salario']?? 1380;
        $salarioMinimo = 1380;
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER ['PHP_SELF']?>" method="get">
            <label for="salario">Salário (R$)</label>
            <input type ="number" name="salario" id="salario" value = "<?=$salario?>">

            <p>Considerando o salário mínimo de <strong>R$ 1.380,00</strong></p>

            <input type ="submit" value ="Analisar">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado Final</h2>
        <?php
            $qtdeSalario = $salario / $salarioMinimo;
            $restoSalario =  $salario % $salarioMinimo;

            echo "Quem recebe um salário de R$ 1.380,00 ganha <strong>". (int) $qtdeSalario. " salários mínimos</strong> + R$ ". number_format($restoSalario, 2, ",", "."). "<br> ";


        ?>
    </section>
</body>
</html>