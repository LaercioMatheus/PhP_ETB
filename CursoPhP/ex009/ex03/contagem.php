<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exe Contador</title>
</head>
<body>
    <?php
        $n1 = isset($_GET["num1"]) ? $_GET["num1"] : 0;
        $n2 = isset($_GET["num2"]) ? $_GET["num2"] : 10;
        $salto = isset($_GET["esc"]) ? $_GET["esc"] : 1;
        $c = $n1;

        #SE O NUMERO DE INICIO FOR MAIOR QUE O VALOR DE FINAL, VAI EXECUTAR DE ESSE 'if'
        if ($n1 < $n2) {

                //ENQUANTO O CONTADOR FOR MENOR OU IGUAL AO NUMERO DE FINAL VAI MOSTRAR O CONTADOR E SOMAR MAIS O SALTO
                while ($c <= $n2) {
                    echo " - $c";
                    $c += $salto;
                }

                #SE O NUMERO DE FINAL FOR MENOR QUE O DE INICIO VAI EXECUTAR O 'elseif'
        } elseif ($n2 < $n1) {

            //ENQUANTO O NUMERO DE INICIO FOR MAIOR OU IGUAL AO NUMERO DE FINAL O NUMERO DE INICIO VAI SER MOSTRADO E VAI SOMAR MAIS O SALTO
            while ($n1 >= $n2) {
                echo " - $n1";
                $n1 -= $salto;
            }

            #SE NAO VAI MOSTRAR ESSA MENSAGEM DE AVISO
        } else {
            echo "Caiu no else :((";
        }
    ?>
    <p>
    <a href="index.php" class="botao">Voltar</a>
</body>
</html>