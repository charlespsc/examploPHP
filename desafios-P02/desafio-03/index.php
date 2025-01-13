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
        $num = $_GET['num']?? 0;
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER ['PHP_SELF']?>" method="get">
            <label for="num">Número:</label>
            <input type ="number" name="num" id="num" value = "<?=$num?>">

            <input type ="submit" value ="Calcular Raízes">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado Final</h2>
        <?php
            $raizQuadrada = $num ** (1/2);
            $raizCubica =  $num ** (1/3);

            echo "Analizamos o <strong> número ". $num. "</strong>, temos:";
            echo "<ul><li>A sua raiz quadrada é <strong>". number_format($raizQuadrada, 3). "</strong> </li>";
            echo "<li>A sua raiz cúbica é <strong>". number_format($raizCubica, 3). "</strong> </li></ul>";

        ?>
    </section>
</body>
</html>