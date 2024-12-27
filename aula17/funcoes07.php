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
    printf("22. Função: substr<br>");
    $site="Curso em Video";
    echo "Exemplos de substring de 'Curso em Vídeo'.<br>";
    $sub=substr($site,0,5);
    print($sub);
    echo"<br>";
    print(substr($site,-5));

    echo "<br><br>";
    printf("23. Função: str_pad<br>");
    $nome="Charles";
    $novo=str_pad($nome,100, " ", STR_PAD_LEFT);
    print("Meu professor $novo é inteligente!");


    echo "<br><br>";
    printf("24. Função: str_repeat<br>");
    $txt=str_repeat("PHP ", 5);
    print("O texto gerado foi: $txt <br>");
    print(str_repeat("-", 60));

    echo "<br><br>";
    printf("25. Função: str_replace<br>");
    $frase="Estou aprendendo Java";
    $novafrase=str_replace("Java", "PHP", $frase);
    print($novafrase);
    
    ?>
</div>
</body>
</html>
 