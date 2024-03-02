<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Variaveis de variaveis PhP</title>
</head>
<body>
    <?php
        #VOU CRIAR UMA VARIAVEL APARTIR DO CONTEUDO DA OUTRA VARIAVEL
        $x = "abc";
        $$x = "def";
        echo "O conteudo da variavel X e $x";
        echo "<br/>A variavel ABC criada recebeu o valor $abc"; // TENHO UMA VARIAVEL COM O NOME DE OUTRA VARIAVEL
    ?>
</body>
</html>