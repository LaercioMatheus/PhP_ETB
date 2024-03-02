<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Procedimento-PhP1</title>
</head>
<body>
    <?php
        #ROTINAS SAO OS PROCEDIMENTOS E AS FUNÇÕES
    /*ESSE TIPO DE PROCEDIMANTO NAO RETORNA VALOR*/
        function soma ($a, $b) {
            $s = $a + $b;
            echo "<p>A soma de $a e $b vale $s</p>";
        }
        
        //AQUI ESTA CHAMANDO O PROCEDIMENTO 'soma'
        #ESSE E O CORPO PRINCIPAL
        soma(3, 4);
        soma(8, 2);
        
        //AS VARIAVEIS x E y SAO CHAMADAS PELA FUNCAO ABAIXO
        $x = 9;
        $y = 15;
        soma($x, $y);
        $a = 10;
        $b = 50;
        soma($a, $b);
    ?>
</body>
</html>