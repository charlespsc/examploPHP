<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title> Exercício PHP</title>
</head>
<body>
<div>
    <?php
    $nome = isset($_GET["nome"])?$_GET["nome"]:"[Não Informado]";
    $anoNasc = isset($_GET["anoNasc"])?$_GET["anoNasc"]:null;
    $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[Sem sexo]";
    $idade = 2024 - $anoNasc;
    echo "$nome é $sexo e tem $idade anos.";
    ?>
    <br><br>
    <a href="exercicio02.php">Voltar</a>
</div>
</body>
</html>
