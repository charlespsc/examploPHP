<?php 
    echo "<h1>Operações Aritméticas</h1>";

    echo "<h2>min( ) e max( )</h2>";
    $res1 = min(5, 1, 9, 4, 6, 3);
    print("O mínimo dos valores: 5, 1, 9, 4, 6, 3 é => $res1<br>");

    $res1 = max(5, 1, 9, 4, 6, 3);
    print("O máximo dos valores: 5, 1, 9, 4, 6, 3 é => $res1<br>");

    echo "<h2>pi( )</h2>";
    $pi = pi();
    print("1ª forma: usando pi( ) - A resposta é $pi <br>");

    $pi = M_PI;
    print("2ª forma: usando a constante M_PI já declarada - A resposta é $pi<br>");

    echo "<h2>pow( )</h2>";
    $potencia = 5 ** 2;
    print("1ª forma: 5 ** 2 - A resposta é $potencia <br>");

    $potencia2 = pow(5, 2);
    print("2ª forma: pow(5, 2) - A resposta é $potencia2 <br>");
    
    echo "<h2>sin( ), cos( ) e tan( )</h2>";
    print("Não vamos testar.<br>");

    echo "<h2>sqrt( )</h2>";
    $raizq1 = sqrt(81); 
    print("1ª forma: A raiz quadrada de sqrt(81) é $raizq1<br>");
 
    $raizq2 = 81 ** (1/2); 
    print("2ª forma: A raiz quadrada de 81 ** (1/2) é $raizq2 <br>");
    echo"<i>Nesse caso podemos fazer a raiz cúbica!</i>"
?>