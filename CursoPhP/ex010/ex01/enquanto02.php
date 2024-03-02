<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Enquanto parte 2</title>
</head>
<body>
    <?php
        //CONTANDO DO 1 ATE 10 COM A ESTRUTURA ENQUANTO COM TESTE LOGICO NO FINAL
        $n = 1;
        do {
            echo "$n ";
            $n++; //OU $n += 'O NUMERO QUE DESEJA SALTAR'
        } while ($n <= 10); // NAO ESQUECER DO PONTO E VIRGULA NO FINAL

        ECHO "<p>";

    //CONTANDO DO 10 ATE 1 COM A ESTRUTURA ENQUANTO COM TESTE LOGICO NO FINAL
        $n = 10;
        do {
            echo "$n ";
            $n--; //OU $n 'O NUMERO QUE DESEJA SALTAR'
        } while ($n >= 1); // NAO ESQUECER DO PONTO E VIRGULA NO FINAL
    ?>
</body>
</html>