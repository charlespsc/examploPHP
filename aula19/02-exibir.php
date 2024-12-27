<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <pre>
    <?php
        printf("Adicionando os valores ao vetor:<br><br>");
        $v = array("A", "B", "C", "D", "E", "F");
        print_r($v);
        $v[] = "Z";
        print_r($v);

    ?>
    </pre>
</div>
</body>
</html>
 