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
        printf("Gerenciando os PRIMEIROS elementos:<BR>    (UNSHIFT/SHIFT):</úl><br><br>");
        $v = array(3, 5, 8, 2);
        print_r($v);
        print("<br>Inserindo e removendo elemento (7):<br>");
        array_unshift($v, 7);
        print_r($v);
        array_shift($v);
        print_r($v);

    ?>
    </pre>
</div>
</body>
</html>
 