
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title> Exercício PHP</title>
</head>
<body>
<div>
    <?php
    $valor = $_GET["valor"];
    $raiz = sqrt($valor);
    echo "A raiz de $valor é igual a " . number_format($raiz, 2);
    ?>
    <br>
    <a href="exercicio01.php">Voltar</a>
</div>
</body>
</html>

