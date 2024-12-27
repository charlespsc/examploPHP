<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title> Exercício PHP</title>
</head>
<body>
<b>Exercício 02 -</b> Ler nome, ano de nascimento e sexo de uma pessoa, mostrando sua idade atual.
<br><br>
<div>
    <form method="get" action="02idade.php">
        Nome: <input type="text" name="nome" size="20" maxlength="20"><br><br>
        Ano de Nascimento: <input type="number" name="anoNasc" size="20" maxlength="20"><br><br>
        <fieldset>
            <legend>Sexo:</legend>
            <input type="radio" name="sexo" value="Homem">Masculino<br>
            <input type="radio" name="sexo" value="Mulher">Feminino<br>
        </fieldset><br>
        <input type="submit" value="Enviar">
    </form>
</div>
</body>
</html>
