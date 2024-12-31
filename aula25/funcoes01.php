<?php 
    echo "<h1>Operações Aritméticas</h1>";

    echo "<h2>abs( )</h2>";
    $res1 = abs(-20);
    print("O valor absoluto de -20 é $res1.");

    echo "<h2>base_convert( )</h2>";
    $res2 = base_convert(254, 10, 8);
    print("Conversão: 254 da base 10 'decimal' para base 8 'Octal' =>  $res2<br>");

    $res2 = base_convert(254, 10, 16);
    print("Conversão: 254 da base 10 'decimal' para base 16 'Hexadecimal' =>  $res2<br>");

    $res2 = base_convert(254, 10, 2);
    print("Conversão: 254 da base 10 'decimal' para base 2 'binário' =>  $res2<br>");

    echo "<h2>ceil( ), floor( ) e round( )</h2>";
    echo "ceil( ) => arredondamento para baixo.<br>";
    echo "floor( ) => arredondamento para cima.<br>";
    echo "round( ) => arredondamento aritmético.<br>";

    echo "<h2>hypot( )</h2>";
    echo "Você diz qual o tamanho dos catetos e será calculado a hipotenusa.";

    echo "<h2>intdiv( )</h2>";
    echo "Caso eu queira fazer uma divisão inteira.<br><br>";
    $res3 = 5/2;
    print("O resultado da divisão 5/2 é => $res3 <br>");
    $res3 = intdiv(5, 2);
    print("A resposta da intdiv( ) => $res3");

?>