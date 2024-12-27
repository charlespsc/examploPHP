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
        printf("Gerenciando os últimos elementos (PUSH/POP):</úl><br><br>");
        $v = array("A", "B", "C", "D", "E", "F");
        array_push($v, "G", "H");
        print_r($v);
        array_pop($v);
        print_r($v);

    ?>
    </pre>
</div>
</body>
</html>
 