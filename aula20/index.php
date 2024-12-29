<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Me livrando da Maldição</title>
</head>
<body>
    <h1>
    <p>Vamos tentar nos livrar da maldição!</p>
    <?php 
        echo"Olá, Mundo! \u{1F30E}";
        echo"<br><br>";
        date_default_timezone_set("America/Sao_Paulo"); // GMT -3
        echo"Hoje é dia " . date("d/m/Y");
        echo" e a hora atual é " . date("G:i:s T");
    ?>
    </h1>
</body>
</html>