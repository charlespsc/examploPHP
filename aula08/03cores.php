<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title> Exercício PHP</title>
    <?php
    $txt = isset($_GET["txt"])?$_GET["txt"]:"Texto Genérico";
    $tam = isset($_GET["tam"])?$_GET["tam"]:"12pt";
    $cor = isset($_GET["cor"])?$_GET["cor"]:"#FF0000";
    ?>
    <style>
        span.texto {
            font-size: <?php echo $tam;?>;
            color: <?php echo $cor;?>;
        }
    </style>
</head>
<body>
<div>
    <?php
    echo "<span class='Texto'>$txt</span><br/>";
    ?>
    <br>
    <a href="exercicio03.php">Voltar</a>
</div>
</body>
</html>
