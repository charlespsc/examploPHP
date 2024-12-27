<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>

<div>
    <pre>Exemplo de range com FOREACH
        <table border="1">
    <?php

        $c=range(0, 20, 2);
        foreach ($c as $v) {
            echo "<th>$v</th>";
        }
    ?>
    </table>
    </pre>
</div>
</body>
</html>
 