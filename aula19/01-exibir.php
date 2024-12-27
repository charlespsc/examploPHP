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
        printf("Exibindo vetor (print_r e var_dump)<br/><br/>");
        $v = array("A", "B", "C", "D", "E", "F");
        print_r($v);
        var_dump($v);

        echo"<br> O vetor tem " . count($v) . " elementos.<br>";
    ?>
    </pre>
</div>
</body>
</html>
 