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
        printf("10. Função: str_split<br>");
        $nome="Elaine";
        $vetor1=str_split($nome);
        print_r($vetor1);

        echo "<br><br>";
        printf("11. Função: implode<br>");
        $vetor[0]="Curso";
        $vetor[1]="em";
        $vetor[2]="Vídeo";
        $texto=implode("-",$vetor); // pode substituir implode por join()
        print($texto);

        echo "<br><br>";
        printf("12. Função: chr<br>");
        $letra=chr(67);
        echo "A letra de código 67 é $letra"; // chr 99 é c minúsculo.

        echo "<br><br>";
        printf("13. Função: ord<br>");
        $letra2="P";
        $codigo=ord($letra2);
        echo "A letra $letra2 em código é $codigo";

    ?>
</div>
</body>
</html>
 