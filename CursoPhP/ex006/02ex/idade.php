<!DOCTYPE html>
<html lang="pt=br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title></title>
</head>
<body>
    <?php
    /*SE 'nome, ano, data e sexo' FOI CONFIGURADO ENVIA PARA A VARIAVEL, SE NAO RECEBE A MESAGEM ALTERNATIVA DEPOIS DOS DOIS PONTOS.*/
    $nome = isset($_GET["nome"]) ? $_GET["nome"]: "[nao informado]";
    $ano = isset($_GET["ano"])? $_GET["ano"] : 0;
    $data = isset($_GET["data"]) ? $_GET["data"] : 0;
    $sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "[sem sexo]";

    $idade = date("Y") - $ano;
    echo "$nome é $sexo e tem $idade anos de idade.";
    echo "<br/> $nome nasceu na data $data";
    ?>
    <p></p>
    <a href="index.html">Voltar</a>
</body>
</html>