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
        printf("Ordenação Associativa:<br><br>");
        $v = array(3, 5, 4, 2, 1, 6);
        print_r($v);
        asort($v);
        print_r($v);
    ?>
    </pre>
</div>
</body>
</html>
 