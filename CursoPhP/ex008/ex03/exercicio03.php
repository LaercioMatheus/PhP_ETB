<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercicio 03</title>
</head>
<body>
    <?php
        $est = isset($_GET["estado"]) ? $_GET["estado"] : "Estado não existe!";

        switch ($est) {
            case 1:
                $est = "NORTE";
                break;
            case 2:
                $est = "NORDESTE";
                break;
            case 3:
                $est = "CENTRO-OESTE";
                break;
            case 4:
                $est = "SUDESTE";
                break;
            case 5:
                $est = "SUL";
                break;
            default:
            echo "Nao existe esse estado no Brasil!!";    
        }
        echo "Voce mora na regiao <span class='desc'>$est</span>";
    ?>
    <p>
    <a href="index.html" class="botao">Voltar</a>

    <p>Muito Obrigado! ;)</p>
</body>
</html>