<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulários</title>
</head>
<body>
    <?php
    //A VARIAVEL VALOR QUE TEM O CONTEUDO DE 'v' PASSADA PELO FORMULÁRIO EM HTML
        $valor = $_GET["v"]; #VAI RECEBER O OBJETO QUE É O 'v'
        echo "Digitou o valor $valor";
        $r = sqrt($valor);
        echo "<br/>A raiz de $valor é ". number_format($r, 2);

        echo "<p/>"

        
    ?>
    <a href="01exercicio.html" class="botao">Voltar</a>


</body>
</html>