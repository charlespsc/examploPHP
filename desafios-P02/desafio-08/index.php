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
        $sacar = $_GET['sacar']?? 0;
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER ['PHP_SELF']?>" method="get">
            <label for="sacar">Qual valor você deseja sacar? (R$)<sup>*</sup></label>
            <input type ="number" name="sacar" id="sacar" value = "<?=$sacar?>">

            <p><h5><sup>*</sup>Notas disponíveis: R$100, R$50, R$10 e R$5</h5></p>

            <input type ="submit" value ="Sacar">
        </form>
    </main>

    <section id="resultado">
        <h2>Saque de R$<?=number_format($sacar,2, ",", ".")?> realizado</h2>
        <?php
            $nota100 = $sacar;
            $nota50 = $sacar;
            $nota10 = $sacar;
            $nota5 = $sacar;
            $qtdeNotas = $sacar;

            echo "O caixa eletrônico vai te entregar as seguintes notas:";
            echo "<ul><li>imagem100 x $qtdeNotas</li>";
            echo "<li>imagem50 x $qtdeNotas</li>";
            echo "<li>imagem10 x $qtdeNotas</li>";
            echo "<li>imagem5 x $qtdeNotas</li></ul>";

        ?>
    </section>
</body>
</html>