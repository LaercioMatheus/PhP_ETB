<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Procedimento-PhP3</title>
</head>
<body>
    <?php
    #AQUI A ROTINA RECEBE VARIOS PARAMETROS POR VETOR QUE NO CASO E O '$p'
    /*ESSE TIPO AQUI DE PROCEDIMANTO SIM RETORNA VALOR*/
        function soma() {
            #isso e um vetor que sempre comeca com 0
            $p = func_get_args(); //ESSA FUNCAO PEGA TODOS OS ARGUMENTOS DA FUNCAO E COLOCA NO VETOR CHAMADO '$p'
            $tot  = func_num_args(); //ESSA FUNCAO RETORNA O NUMERO DE ARGUMENTOS QUE FORAM PASSADOS E COLOCA NA VARIAVEL '$tot'
            $s = 0;
            //ESTRUTURA DE REPETICAO PARA (for)
            for ($i = 0; $i < $tot; $i++) {
                $s += $p[$i]; //OU $s = $s + $p[$i]
            }
            return $s;
        }

        //$res VAI RECEBER O RETORNO DA VARIAVEL $s
        $res = soma(3, 5, 8, 4, 8, 7); //POSSO PASSAR QUANTOS PARAMETROS EU QUISER (numeros)
        echo "A soma dos valores e $res";
    ?>
</body>
</html>