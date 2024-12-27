<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        printf("4. Função: strlen<br>");
        $txt="Curso de PHP";
        $tamanho=strlen($txt);

        echo " A palavra 'Curso de PHP' tem $tamanho caracteres.";

        echo "<br><br>";
        printf("5. Função: trim<br>");
        $nome="   José da Silva   ";
        echo(strlen($nome));
        echo "<br>";
        $novo=trim($nome);
        echo($novo);
        echo "<br>";
        echo(strlen($novo));

        echo "<br><br>";
        printf("6. Função: ltrim<br>");
        $nome="   José da Silva   ";
        echo(strlen($nome));
        echo "<br>";
        $novo=ltrim($nome);
        echo($novo);
        echo "<br>";
        echo(strlen($novo));

    ?>
</div>
</body>
</html>
 