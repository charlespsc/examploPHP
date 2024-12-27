<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>

<div>
    Exemplo de Chaves Associativas
    <br><br>
    <?php
    $cad=array("nome"=>"Maria", "idade"=>21, "sexo"=>"M");
    $cad["fuma"]=true;

    foreach($cad as $chave=>$valor){
        echo "O campo $chave possui o conteúdo $valor<br/>";
    }
    ?>

</div>
</body>
</html>
 