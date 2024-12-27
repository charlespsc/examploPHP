<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio em PHP</title>
</head>
<body>
<b>Exercício 03 -</b> Desafio.
<br><br>
<div>
    <form method="get" action="exercicio03-P1.php">
        <?php
        // Função para criar o contador
        function contadorPersonalizavel($inicio, $final, $incremento) {

            // Ajusta o incremento se for negativo e o início for menor que o fim
            if ($inicio < $final && $incremento < 0) {
                echo "Para uma contagem crescente, o incremento deve ser positivo.";
                return;
            }

            // Ajusta o incremento se for positivo e o início for maior que o fim
            if ($inicio > $final && $incremento > 0) {
                echo "Para uma contagem decrescente, o incremento deve ser negativo.";
                return;
            }

            // Exibe o contador
            echo "Contagem: <br>";
            for ($i = $inicio; $inicio < $final ? $i <= $final : $i >= $final; $i += $incremento) {
                echo $i . "<br>";
            }
        }

        // Verifica se os valores foram passados na URL
        if (isset($_GET['inicio']) && isset($_GET['final']) && isset($_GET['incremento'])) {
            $inicio = (int)$_GET['inicio'];
            $final = (int)$_GET['final'];
            $incremento = (int)$_GET['incremento'];

            // Chama a função para criar o contador
            contadorPersonalizavel($inicio, $final, $incremento);
        } else {
            echo "Por favor, forneça os parâmetros 'inicio', 'final' e 'incremento' na URL.";
        }
        ?>

        <br>
        <input type="submit" value="Voltar">
    </form>
</div>
</body>
</html>