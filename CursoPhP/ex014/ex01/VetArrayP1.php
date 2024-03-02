<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Vetores(Array) e matrizes parte 1</title>
</head>
<body>
    <pre>
        <?php
        //VETORES SEMPRE COMECA COM O VALOR 0
        //VETORES OU ARRAY DINAMICOS
        /*DINAMICOS PORQUE DE ACORDO COM A QUANTIDADE DE POSICOES QUE O VETOR TEM, EU POSSO ACRECENTAR MAIS */
            $n = array(3,5,8,2);
            /*ESSES COCHETES VAZIOS SERVE PARA INFORMAR AO VETOR QUE CRIE UMA NOVA POSICAO NO FINAL DO VETOR COM O VALOR INFORMADO*/
            $n[] = 7;
            print_r($n);

            echo "<hr><p>";
            //OU MUDANDO A PALAVRA 'ARRAY' PARA 'RANGE'
            /*ESSA SINTAXE SIGNIFICA QUE VAI COMECAR EM 5 TERMINAR EM 20 PULANDO DE 2 EM 2*/
            $c = range(5,20,2);
            print_r($c);
            ?>

            <!--MOSTRANDO UM ARRAY DENTRO DE UMA TABELA-->
            <table border="1">
                <?php
                    echo "<hr><p>";
                    //USANDO O FOREACH (PARA CADA)
                    $c = range(5,20,2);
                    /*FOREACH (PARA CADA ELEMENTO DE '$c' TRATADO COMO VALOR DE '$v') */
                    /*O 'as' SIGNIFICA TRATADO COMO '$v' */
                    foreach ($c as $v) {
                        echo "<td>$v ";
                    }
                        ?>
            </table>

            <?php
            echo "<hr><p>";
                /*ARRAY COM CHEVES PERSONALIZADAS OU SEJA NAO PRECISO DEIXAR O PHP DECIDIR QUAL POSICAO VAI SER DE CADA UM VALOR*/
                /*EU POSSO FAZER A ATRIBUICAO A CADA INDECE AO SEU DETERMINADO VALOR E POSICAO*/
                $vet = array(1 => "A",2=> "B",6=> "C",8 => "D");
                print_r($vet);

                echo "<p>";
                $vet = array(   3 => 3,
                                7 => 9,
                                8 => 7,
                                2 => 5);
                                //ACRECENTANDO UMA POSICAO AO VETOR
                                /*SE EU ACRECENTAR UM VALOR E NAO ESPECIFICAR A POSICAO, O VETOR VAI AUTOMATICAMENTE ACRECENTAR A PARTIR DA ULTIMA POSICAO*/
                                $vet[] = 10;
                print_r($vet);

                echo "<p>";
                $vet = array(   3 => 3,
                                7 => 9,
                                8 => 7,
                                2 => 5);
                                $vet[] = 10;
                                /*POSSO TAMBEM DESALOCAR (EXCLUIR) UMA POSICAO COM A FUNCAO 'unset()' USANDO O INDICE DE POSICAO. NESSE CASO EU DESALOQUEI O VETOR DE INDICE 3*/
                                unset($vet[3]);
                print_r($vet);

                echo "<hr><p>";
                /*ARRAY DE CHAVES ASSOCIATIVAS*/
                //UM VETOR EM PHP NAO E HOMOGENIO COMO EM ALGORITIMOS
                /*AU POSSO TER UM ARRAY COM VALORES DIFERENTES COMO INTEIROS, DE STRING E REAIS*/ 
                $ve = array("nome" => "Matheus",
                            "idade" => 16,
                            "peso" => 78.5);
                $ve["estuda"] = true;
                //EXPLICACAO DA ESTRUTURA FOREACH
                /*CADA ELEMENTO DE $ve (VETOR) COMO A CHAVE $inf ASSOCIADO AO CONTEUDO $v, VAI MOSTRAR O CAMPO $inf QUE POSSUI O CONTEUDO $v */

                /*****FOREACH (PARA CADA ELEMENTO DE '$c' TRATADO COMO VALOR DE '$v') */
                    /*O 'as' SIGNIFICA TRATADO COMO '$v' *****/
                foreach($ve as $inf => $v) {
                    echo "O campo $inf possui o conteudo $v<br/>";
                }
            ?>
    </pre>
</body>
</html>