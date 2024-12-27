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
        printf("Ordenando Vetores:<br><br>");
        $v = array(3, 5, 4, 2, 1, 6);
        print_r($v);
        rsort($v);
        print_r($v);
    ?>
    </pre>
</div>
</body>
</html>
 