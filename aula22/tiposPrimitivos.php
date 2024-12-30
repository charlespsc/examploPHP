<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos</title>
</head>
<body>
    <h1>Categorias dos tipos primitivos</h1>
    <br>
    <h2>Escalares - Compostos - Especiais</h2>

    <h2>Tipos Primitivos Escalares: </h2>
    <?php 
        $sobrenome = "Silva";   // String
        $idade = 34;            // int ou integer
        $peso = 85.9;           // float, double ou real(que não existe apartir da versão 7)
        $casado = true;         // bool ou boolean

        echo "Sobrenome: $sobrenome <br>";
        echo "Idade: $idade<br>";
        echo "Peso: $peso<br>";
        echo "Casado (true/false): $casado<br>";
        // 0x = hexadecimal - 0b = binário - 0 = Octal
        $num1 = 0x1A;
        echo "O valor da variável que recebe '0x1A' é $num1 (hexadecimal)<br>";

        $num2 = 0b1011;
        echo "O valor da variável que recebe '0b1011' é $num2 (binário)<br>";

        $num3 = 010;
        echo "O valor da variável que recebe '010' é $num3 (Octal)<br><br>";

        $v = "Charles";
        echo "O valor da variável 'v' é $v <br>";
        echo "Podemos ver o seu tipo com o comando var_dump: ";
        var_dump($v);

        echo "Coerção: ";
        $coercao = (int) "300";
        echo "A variável 'coercao' que recebe a string 300 pode mudar para inteiro com a coerção (int) ''300'':";
        var_dump($coercao);


    ?>
    <h2>Tipos Primitivos Compostos: </h2>
    - array <br>
    - object
    
    <h2>Tipos Primitivos Escalares: </h2>
    - null<br>
    - resource<br>
    - callabe<br>
    - mixed<br>
</body>
</html>