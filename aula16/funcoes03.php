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
        printf("7. Função: rtrim<br>");
        $nome="   José da Silva   ";
        echo(strlen($nome));
        echo "<br>";
        $novo=rtrim($nome);
        echo($novo);
        echo "<br>";
        echo(strlen($novo));

        echo "<br><br>";
        printf("8. Função: str_word_count<br>");
        $frase="Eu vou estudar PHP";

        printf("Usando o format com valor 0<br>");
        $cont=str_word_count($frase, 0);
        print("A frase 'Eu vou estudar PHP' tem: $cont palavras");

        echo "<br><br>";
        printf("Usando o format com valor 1<br>");
        $cont=str_word_count($frase, 1);
        print_r($cont);

        echo "<br><br>";
        printf("9. Função: explode<br>");
        $site="Curso em Video";
        $vetor=explode(" ", $site);
        print_r($vetor);

    ?>
</div>
</body>
</html>
 