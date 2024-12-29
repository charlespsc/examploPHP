<?php 
    $nome = "Charles";
    $sobrenome = "Pereira";
    const PAIS = "Brasil";

    echo "Muito prazer, $nome $sobrenome! Você mora no " . PAIS;

    echo "<br><br>Regras para nomes indentificadores<br><br>";

    echo "1 - Variáveis sempre começam com o <b>símbolo $</b><br>";
    echo "2 - O segundo pode ser <b>letra</b> ou <b>símbolo _</b><br>";
    echo "3 - Aceita caracteres [<b>a-z</b>], [<b>A-Z</b>], [<b>0-9</b>] e [<b> _ </b>]<br>";
    echo "4 - Aceita caracteres da tabela <b>ASCII</b> a partir de <b>128</b><br>";
    echo "5 - Aceita caracteres acentuados como <b>á</b>, <b>õ</b>, <b>ç</b> <br>";
    echo "6 - A linguagem é <b>case sensitive</b> em relação aos nomes<br>";
    echo "7 - Nomes especiais como <b>'cifrão this'</b> não podem ser usados<br>";

?>