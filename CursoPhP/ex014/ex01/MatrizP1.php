<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Matrizes parte 01</title>
</head>
<body>
    <pre>
        <?php
            //MATRIZES SAO BASICAMENTE VETORES DENTRO DE VETORES
            $m = array( array(6,4),
                        array(4,9),
                        array(3,2));
            //1° e LINHA 2° e POSICAO dos dois lados do sinal de igualdade
            $m[2] [1] = $m[1] [1]; 
            print_r($m);
        ?>
    </pre>
</body>
</html>