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
    printf("18. Função: strrev<br>");
    $nome="charles pereira";
    echo "Seu nome ao contrário é ";
    print(strrev($nome));

    echo "<br><br>";
    printf("19. Função: strpos<br>");
    $frase="Estou aprendendo PHP";
    $pos=strpos($frase, "PHP");
    echo "$frase <br>A string 'PHP' foi encontrada na posição $pos<br>";

    echo "<br><br>";
    printf("20. Função: stripos<br>");
    $frase="Estou aprendendo PHP";
    $pos=stripos($frase, "php");
    echo "$frase <br>A string 'php' foi encontrada na posição $pos<br>";

    echo "<br><br>";
    printf("21. Função: substr_count<br>");
    $frase="Estou aprendendo PHP no Curso em Vídeo de PHP";
    $cont=substr_count($frase, "PHP");
    print($frase);
    print("<br>PHP encontrado $cont vezes na frase acima.<br>");
    
    ?>
</div>
</body>
</html>
 