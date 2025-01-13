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
        $dividendo = $_GET['dividendo']?? 0;
        $divisor = $_GET['divisor']?? 0;
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?=$_SERVER ['PHP_SELF']?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type ="number" name="dividendo" id="dividendo" value = "<?=$dividendo?>">

            <label for="v2">Divisor</label>
            <input type ="number" name="divisor" id="divisor2" value = "<?=$divisor?>">

            <input type ="submit" value ="Analisar">
        </form>
    </main>

    <section id="resultado">
        <h2>Estrutura da Divisão</h2>
        <?php
            $quociente = $dividendo / $divisor;
            $resto = $dividendo % $divisor;

            echo "Dividendo: $dividendo <br> ";
            echo "Divisor: $divisor <br>";
            echo "Quociente: ". (int)$quociente. " <br>";
            echo "Resto: $resto <br>";

        ?>
    </section>
</body>
</html>