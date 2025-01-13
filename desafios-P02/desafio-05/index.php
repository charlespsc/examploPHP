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
        $anoNascimento = $_GET['anoNascimento']?? 1900;
        $anoAtual = $_GET['anoAtual']?? date('Y');
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?=$_SERVER ['PHP_SELF']?>" method="get">
            <label for="anoNascimento">Em que ano você nasceu?</label>
            <input type ="number" name="anoNascimento" id="anoNascimento" value = "<?=$anoNascimento?>">

            <label for="anoAtual">Quer saber sua idade em que ano? (atualmente estamos em  <strong><?=$anoAtual?></strong>)</label>
            <input type ="number" name="anoAtual" id="anoAtual" value = "<?=$anoAtual?>">

            <input type ="submit" value ="Qual será minha idade?">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado</h2>
        <?php
            $idadeAtual = $anoAtual - $anoNascimento;

            echo "Quem nasceu em ". $anoNascimento ." vai ter <strong>". $idadeAtual. " anos</strong> em ". $anoAtual;

        ?>
    </section>
</body>
</html>