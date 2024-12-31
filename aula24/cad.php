<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php
            //var_dump($_REQUEST); // Junção de $_GET $_POST $_COOKIES
            $nome = $_GET["nome"] ?? "SEM NOME";
            $snome = $_GET["sobrenome"] ?? "SEM SOBRENOME";
            echo "<p> É um prazer te conhecer,<strong> $nome $snome! </strong><br> Este é o meu site!</p>";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>

    </main>
</body>
</html>