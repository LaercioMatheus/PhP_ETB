<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Vetores parte 2</title>
</head>
<body>
<h1>Vetores e Matrizes parte 2</h1>
    <hr>

    <pre>
        <?php
            $v = array("L", "A", "E", "R", "C");
            /* AS FUNCOES 'array_push' E 'array_pop' SAO ESPECIFICAS PARA TRATAMENTO DE "PILHA" ONDE EU COLOCO E RETIRO VALORES DA PONTA (FINAL)*/

            //A FUNCAO array_push() VAI ACRECENTAR UM ELEMENTO NO FINAL DO VETOR
            //1° o nome do vetor; 2° o elemento que quero colocar
            array_push($v, "I");
            print_r($v);

            //A FUNCAO array_pop() VAI DESALOCAR UM ELEMENTO (EXCLUIR) NO FINAL DO VETOR
            array_pop($v);

            //O PRINT_R SERVE PARA O  PROGRAMADOR FAZER TESTES
            print_r($v);
            echo "<br/>";

            //O VAR_DUMP E MAIS COMPLETO E MOSTRA O TIPO DE VALOR ESTA DENTRO DE CADA POSICAO DO VETOR
            var_dump($v);

            //'count()' SERVE PARA SABER QUANTOS ELEMENTOS TEM DENTRO DO VETOR
            $tot = count($v);
            echo "O vetor tem $tot elementos :)";


            echo "<hr><p>";
            $vet = array(3,1,8,2,6,7);
            print_r($vet);

            //FUNCAO PARA ACRECENTAR ELEMENTO NO INICIO DO VETOR
            array_unshift($vet, 4);
            print_r($vet);

            //FUNCAO PARA DESALOCAR (EXCLUIR) UM ELEMENTO NO INICIO DO VETOR
            array_shift($vet);
            //print_r($vet);

            //sort() E UMA FUNCAO PARA COLOCAR OS VALORES DENTRO DO VETOR EM ORDEM
            //POSSO ORDENAR TANTO NUMEROS QUANTO LETRAS
            sort($vet);
            print_r($vet);

            //FUNCAO PARA ORDENAR DE FORMA COTRARIA (DECRESCENTE) OS VALORES DENTRO DO VETOR
            rsort($vet);
            print_r($vet);

            /******ORDENACAO ASSOCIATIVA *****/
            //FUNCAO PARA COLOCAR OS ELEMENTOS DO VETOR E AS POSICOES DOS ELEMENTOS (OS INDICES) TAMBEM
            asort($vet);
            print_r($vet);

            //FUNCAO PARA ORDENAR OS ELEMENTOS E OS INDICES DO VETOR DE FORMA REVERSA
            arsort($vet);
            print_r($vet);


            /**** ORDENACAO POR CHAVES *****/

            /*ESSA ORDEM VAI SER PELOS INDICES (CHAVES) OU SEJA PELO NUMERO DAS POSICOES DO VETOR*/
            //O 'k' SIGNIFICA key DE CHAVE VAI ORDENAR SOMENTE OS INDICES
            $tor = array(2=>"L", 5=>"A", 0=>"M", 4=>"T", 3=>"U");
            ksort($tor);
            print_r($tor);

            //VAI ORDENAR OS INDICES, MAS EM ORDEM REVERSA
            krsort($tor);
            print_r($tor);

            /****FIM DO CURSO POR AQUI****/
        ?>
    </pre>
</body>
</html>