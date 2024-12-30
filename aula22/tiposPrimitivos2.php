<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos</title>
</head>
<body>
    <h1>Categorias dos tipos primitivos</h1>
    <br>
    <h2>Escalares - Compostos - Especiais</h2>

    <h2>Tipos Primitivos Compostos: array e object</h2><br>
    <?php 
    $vet = [6, 4.5, "Charles", 3, false];
    var_dump($vet);

    class Pessoa {
        private $nome;
    }

    $pessoa1 = new Pessoa;
    var_dump($pessoa1);
    ?>
    
    <h2>Tipos Primitivos Escalares: null, resource, callabe e mixed</h2>

</body>
</html>