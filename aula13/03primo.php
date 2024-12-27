<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio em PHP</title>
</head>
<body>
<b>Exercício 03 -</b> Verifique se um número digitado pelo usuário é primo.
<br><br>
<div>
    <?php
    function verificarPrimo($numero) {
        // Números menores ou iguais a 1 não são primos
        if ($numero <= 1) {
            return false;
        }

        // Verifica divisores do número até a raiz quadrada
        for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i == 0) {
                return false; // Encontrou um divisor
            }
        }

        return true; // Não encontrou divisores, é primo
    }

    function listarMultiplos($numero) {
        $multiplos = [];
        for ($i = 1; $i <= $numero; $i++) {
            if ($numero % $i == 0) {
                $multiplos[] = $i;
            }
        }
        return $multiplos;
    }

    // Verifica se o número foi enviado via GET
    if (isset($_GET['numero'])) {
        $numero = (int)$_GET['numero']; // Converte para inteiro

        // Verifica se o número é primo
        $resultadoPrimo = verificarPrimo($numero) ? "é primo" : "não é primo";

        // Lista os múltiplos
        $multiplos = listarMultiplos($numero);
        $totalMultiplos = count($multiplos);

        // Exibe os resultados
        echo "<h1>Analisando o número: $numero</h1>";
        echo "<p><strong>Valores múltiplos:</strong> " . implode(", ", $multiplos) . "</p>";
        echo "<p><strong>Total de múltiplos:</strong> $totalMultiplos</p>";
        echo "<p><strong>Resultado:</strong> O número $numero $resultadoPrimo.</p>";
    } else {
        echo "<h1>Por favor, forneça um número na URL usando o parâmetro 'numero'.</h1>";
        echo "<p>Exemplo: ?numero=30</p>";
    }
    ?>

    <form method="get" action="exercicio03.php">
        <input type="submit" value="Voltar">
    </form>
</div>
</body>
</html>

