<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Procedimento-PhP2</title>
</head>
<body>
    <?php
    //  AQUI ESSA ROTINA SO RECEBE DOIS PARAMETROS
    //ESSE TIPO AQUI DE PROCEDIMANTO SIM RETORNA VALOR
        function soma ($a, $b) {
            //$s = $a + $b; OU COMO ESTÁ ABAIXO
            //nao é necessario criar uma variavel para receber o valor do calculo
            return $a + $b; //ESSE PARAMETRO VAI RETORNAR O VALOR DO CALCULO
        }

        $x = 5;
        $y = 2;
        #NO RETORNO O VALOR VAI SER COLOCADO NA VARIAVEL 'res'
        $res = soma($x, $y);
        echo "A soma entre $x e $y vale $res";
        
    ?>
</body>
</html>