<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        printf("1. Função: printf<br>");

        $prod="Leite";
        $preco=4.5;

        //echo "O $prod custa R$ " . number_format($preco, 2);
        printf("O %s custa R$ %.2f", $prod, $preco);

        echo "<br/><br/>";
        printf("2. Função: print_r<br>");

        $v[0] = 4;
        $v[1] = 3;
        $v[2] = 2;
        print_r($v); // Bom para período de testes!

        echo"<br>";
        $v2 = array(3, 7, 6, 2, 1, 9);
        print_r($v2);

        // Podemos usar também o seguinte:  var_dump($x);
        //                                  var_export($x);

        echo "<br/><br/>";
        printf("3. Função: wordwrap<br>");
        $texto = "Aqui temos um texto gigante criado pelo PHP e vai mostrar o funcionamento da função wordwrap";
        $res = wordwrap($texto, 40, "<br/>", false);
        echo $res;

    ?>
</div>
</body>
</html>
 