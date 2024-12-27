<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>

<div>
    <pre>Exemplo de Chaves Personalizadas

    <?php
    $v=array(0=>5, 1=>9, 2=>8, 7=>7);
    $v[]=8;
    print_r($v);
    echo"<br> Diminuir o vetor com UNSET<br>";
    unset($v[0]);
    print_r($v);

    ?>
    </pre>
</div>
</body>
</html>
 