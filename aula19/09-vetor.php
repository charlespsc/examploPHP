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
        printf("Ordenação por Chaves (ksort/krsort):<br><br>");
        $v = array(3=>"C", 2=>"E", 0=>"H", 1=>"B");
        print_r($v);
        Ksort($v);
        print_r($v);
        Krsort($v);
        print_r($v);
    ?>
    </pre>
</div>
</body>
</html>
 