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
        $tempo = $_GET['tempo']?? 0;
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER ['PHP_SELF']?>" method="get">
            <label for="tempo">Qual é o total de segundos?</label>
            <input type ="number" name="tempo" id="tempo" value = "<?=$tempo?>">

            <input type ="submit" value ="Calcular">
        </form>
    </main>

    <section id="resultado">
        <h2>Totalizando o Tempo</h2>
        <?php
            $semanas = $tempo;
            $dias = $tempo;
            $horas = $tempo * 60;
            $minutos = $tempo / 60;
            $segundos = $tempo;

            echo "Analizando o valor que você digitou, <strong>". $tempo. " segundos</strong> equivalem a um total de:";
            echo "<ul><li>$semanas semanas </li>";
            echo "<li>$dias dias </li>";
            echo "<li>$horas horas </li>";
            echo "<li>$minutos minutos </li>";
            echo "<li>$segundos segundos </li></ul>";

        ?>
    </section>
</body>
</html>