<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>As 25 funções</title>
</head>
<body>
    <div>
        <h1>Funções parte 1</h1>
        <h2>Para manipulações de STRING</h2>
        <?php
        /*FAZ A MESMA COISA QUE O 'echo', E UMA HERANCA DO "C". MAS ELE JA IMPRIME FORMATANDO*/
        $prod = "leite";
        $preco = 4.5;
        /*O USO DO echo*/
        echo "O jeito antigo com o 'ECHO'<br/>";
        echo "O $prod custa R$ " . number_format($preco, 2);
        
        echo "<p></p>";
        echo "Elemento ECHO<br/>";
        echo "<hr><p>";
        //O USO DO printf
        echo "O jeito novo com o 'PRINTF'<br/>";
            printf("O %s esta custando R$ %.2f", $prod, $preco);
            //O %.2f SIGNIFICA QUE VAI MOSTRAR UM NUMERO INTEIRO COM DUAS CASAS DECIMAIS
            /*OS DOIS PARAMETRO COM % VAO RECEBER RESPECTIVAMENTE OS VALORES DAS VARIAVEIS '$prod' E 'preco'*/

            //O %s E PARA MOSTRAR UMA STRING


            /****OUTRAS FORMAS DE MOSTRAR VALORES COM PRINTF****/
            //%d - MOSTRA VALORES DECIMAIS (POSITIVO OU NEGATIVO)
            //%u - MOSTRA VALORES DECIMAIS SEM SINAL (APENAS POSITIVOS)
            //%f - MOSTRA VALORES REAIS
            //%s - MOSTRA STRINGS

        echo "<hr><p>";
        echo "Funcao PRINTR<br/>";
        /*SERVE PARA MOSTRAR DETALHES DE UMA VARIAVEL PRINCIPALMENTE SE ELA FOR UM VETOR*/
        /*ELE E USADO PARA PERIODOS DE TESTES QUANDO EU QUERO MOSTRAR OS VALORES DELE*/
        /*Array E UM VETOR*****/
        /*ELA PODE SER SUBSTITUIDA POR OUTRAS DUAS FUNCOES A 'var_dump()' E 'var_export()' */
        $v[0] = 4;
        $v[1] = 8;
        $v[2] = 3;
        print_r($v);
        
        echo "<hr><p>";
        //O SIMBOLO => SIGNIFICA ACOSSIACAO, (ESTA ACOSSIADO)
        $v2 = array (3,7,5,9,6,4);
        print_r($v2);
        
        echo "<hr><p>";
        echo "Funcao WORDWRAP<br/>";
        //ELA VAI CRIAR QUEBRAS DE LINHAS DENTRO DO MEU CODIGO
        $t = "Aqui temos um texto gigante criado pelo PHP, e vai mostrar o funcionamento da funcao wordwrap";
        /*AS QUEBRAS DE LINHAS SAO OS '\n' E AQUI ESTA SUBSTITUINDO PELO 'br' COM ISSO O CODIGO FONTE NAO VAI TER OS '\n' E AQUI EU PRECISO ESPECIFICAR NO wordwrap*/
        /*O FALSE OU TRUE VAI GERAR A QUEBRA POR PARAVRA SE A PALAVRA TIVER MENOS DE 6 LETRAS NAO VAI GERAR A QUEBRA NO 'false'. COM O 'true' VAI QURBRA PALAVRAS COM MENOS DE 6 LETRAS */
        $r = wordwrap($t, 6, "<br/>\n", false);
        echo $r;

        echo "<hr><p>";
        echo "Funcao STRLEN<br/>";
        /*ELA CALCULA O COMPRIMENTO DE UMA STRING, CONTANDO OS ESPACOS*/

        $txt = "Curso em Video";
        $tamanho = strlen($txt);
        echo "O tamanho da variavel TXT é ". $tamanho;

        echo "<hr><p>";
        echo "Funcao TRIM<br/>";
        /*ELA E USADA EM DADOS VINDOS DE FORMULARIOS*/
        /*VAI CORTAR OS ESPACOS QUE TEM NO INICIO E NO FIM DE CADA STRING*/
        $nome = "   Jose da Silva   ";

        /*O strlen VAI CONTAR OS ESPACOS QUE TEM NO INICIO E NO FIM DE CADA STRING*/
        echo (strlen($nome)) . " Usando o 'strlen'<br/>";

        /*O 'trim' VAI CORTAR OS ESPACOS QUE TEM NO INICIO E NO FIM DE CADA STRING*/
        $novo = trim($nome);
        echo $novo . "<br/>";
        echo (strlen($novo)). " Usando o 'trim'";

        echo "<hr><br/>";
        echo "Funcao LTRIM<br/>";
        /*ESSA FUNCAO VAI CORTAR O ESPACOS SOMENTE NO INICIO E VAI MANTER OS DO FINAL */
        $nom = "   Jose da Silva   ";
        echo (strlen($nom)) . "<br/>";
        $nov = ltrim($nom);
        echo ($nov). "<br/>";
        echo (strlen($nov));

        echo "<hr><p>";
        echo "Funcao RTRIM<br/>";
        /*ESSA FUNCAO VAI CORTAR OS ESPACOS SOMENTE NO FINAL E VAI MANTER OS DO INICIO*/
        $no = "   Jose da Silva   ";
        echo (strlen($no)) . "<br/>";
        $novoi = (rtrim($no));
        echo ($novoi) . "<br/>";
        echo (strlen($novoi));

        echo "<hr><p>";
        echo "Funcao STR_WORD_COUNT<br/>";
        /*ESSA FUNCAO VAI MOSTRAR A QUANTIDADE DE PALAVRAS QUE TEM DENTRO DE UMA STRING*/
        /*A RESPOSTA VAI SER 4, PORQUE E A QUANTIDADE DE PALAVRAS QUE ESTA NA VARIAVEL*/
        $frase = "Eu vou estudar PHP agora";
        /*O VALOR '0' SIGNIFICA QUE VAI CONTAR AS PALAVRAS E SE COLOCAR '1' VAI GERAR UM VETOR QUE VAI COLOCAR CADA PALAVRA DENTRO DE UMA POSICAO DESSE VETOR*/
        /*PARA MOSTRAR ESSE VETOR PRECISA USAR A FUNCAO 'print_r'*/
        //PODE COLOCAR OS VALORES '0', '1' E '2'
        /*'0' SOMENTE CONTAR*/
        /*'1' CRIAR UM VETOR */
        /*'2' CRIAR UM VETOR MANTENDO O POSICIONAMENTO DE CADA PALAVRA DENTRO DE CADA STRING*/
        $cont = str_word_count($frase, 2);
        print_r($cont);

        echo "<hr><p>";
        echo "Funcao EXPLODE<br/>";
        /*ESSA CLASSE VAI PROCURAR OS ESPACOS EM BRANCO PARA QUEBRAR AS STRINGS DENTRO UM VETOR OU ARRAY */
        /*OS ESPACOS EM BRANCO VAI SER OS CARACTERE DE SEPARACAO QUANDO EXPLODIR E JOGA DENTRO DO VETOR*/
        $site = "Curso em Video";
        $vetor = explode(" ", $site);
        print_r($vetor);

        echo "<hr><p>";
        echo "Funcao STR_SPLIT<br/>";
        /*ESSA CLASSE VAI PEGAR CADA LETRA E JOGAR EM UMA POSICAO DE UM VETOR (INDICE)*/
        $i = "Maria";
        $vet = str_split($i);
        print_r($vet);

        echo "<hr><p>";
        echo "Funcao IMPLODE<br >";
        //OUTRA FUNCAO QUE PODE SUBSTITUIR ESSA É A 'join()'
        $veti[0] = "Curso";
        $veti[1] = "em";
        $veti[2] = "Video";
        //AS '#' VAI SER OS ESPACOS ENTRE AS PALAVRAS
        //POSSO COLOCAR ESPACOS EM BRANCO TAMBEM
        $texto = implode("#", $veti);
        //APENAS 'print' PORQUE A STRING NAO VAI SER MAIS UM VETOR
        print($texto);

        echo "<hr><p>";
        echo "Funcao CHR<br/>";
        /*ESSA FUNCAO VAI MOSTRAR QUE LETRA ESTA NO CODIGO ESPECIFICO DENTRO DELA*/
        $letra = chr(67);
        echo "A letra do codigo 67 e $letra<br/>";
        $letra = chr(99);
        echo "A letra do codigo 99 e $letra";

        echo "<hr><p>";
        echo "Funcao ORD<br/>";
        /*ESSA FUNCAO VAI MOSTRAR O CODIGO DA LETRA INFORMADA*/
        $let = "C";
        $cod = ord($let);
        print ("A letra $let tem codigo $cod");
        ?>
    </div>
</body>
</html>