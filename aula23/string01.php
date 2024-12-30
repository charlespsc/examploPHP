<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings em PHP</title>
</head>
<body>
    <h1>Manipulação de Strings em PHP</h1>

    <h2>Quatro formatos de Strings:</h2>
    - double quoted (aspas duplas)<br>
    - singue quoted (aspas simples)<br>
    - Heredoc<br>
    - Nowdoc<br>
    <br>

    <?php 
    echo "Concatenação de Strings ( . )<br>";

    $curso = "Curso de PHP";
    $midia = " em Vídeo ";

    echo $curso . $midia . "\u{1F418}<br> \u{1F596}";
    echo $curso . $midia . '\u{1F418}';
    echo "<br><br>";

    const ESTADO = "Santa Catarina";
    echo "Eu moro no " . ESTADO;

    echo "<br><br>";

    $nom = "Rodrigo";
    $snom = "Nogueira";

    echo "Lutador: $nom \"Minotauro\" $snom.";

    // Sequencia de Escape para aspas duplas:
    //  \n   (Nova linha)
    //  \t   (Tabulação Horizontal)
    //  \\   (Barra invertida)
    //  \$   (Sinal de cifrão)
    //  \u{} (Codepoint Unicode)

    echo "<br><br>";

    echo "<h2>Strings Heredoc</h2>";
    /*$curso = "PHP";
    $ano = date('Y');
    echo <<< FRASE
        Estou estudando 
            $curso em $ano.

        FRASE;*/
    
    echo "<h2>Strings Nowdoc</h2>";
    /*$curso = "PHP";
    $ano = date('Y');
    echo <<< 'FRASE'
        Estou estudando 
            $curso em $ano.

        FRASE;*/
    
    ?>


</body>
</html>