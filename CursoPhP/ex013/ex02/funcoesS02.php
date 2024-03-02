<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Funções string parte 2</title>
</head>
<body>
    <h1>Funções parte 2<p></p></h1>
    <?php
        echo "Funcao STRTOLOWER<br/>";
        /*VAI COLOCAR TODAS AS LETRAS EM MINUSCULAS E MANTEM AS QUE JA ESTAO EM MINUSCULAS*/
        //ASSIM
        $nome = "LaErCIo MatHeus";
        print ("Seu nome e ". strtolower($nome));

        echo "<br/>OU ASSIM<br/>";
        //ou assim
        $nome = "Laerico Matheus";
        $nomed = strtolower($nome);
        echo "Seu nome e $nomed";

        echo "<hr><p>";
        echo "Funcao STRTOUPPER<br/>";
        /*VAI COLOCAR TODAS AS LETRAS EM MAIUSCULAS E MANTEM AS QUE JA ESTAO*/
        $nome = "laercio matheus";
        $nome2 = strtoupper($nome);
        echo "Seu nome e ". $nome2;

        echo "<hr><p>";
        echo "Funcao UCFIST<br/>";
        /*COLOCA A PRIMEIRA LETRA EM MAIUSCULA*/
        //uc SIGNIFICA 'UPER CASE' - LETRAS MAIUSCULAS
        //MANTENDO AS QUE JA ESTAO EM MAIUSCULAS
        $nome = "laErcio matheUs";
        print ("Seu nome e ". ucfirst($nome));
        //USANDO O STRTOLOWER
        print ("<br/>Seu nome e ". ucfirst(strtolower($nome)));

        echo "<hr><p>";
        echo "Funcao UCWORDS<br/>";
        //COLOCA A PRIMEIRA LETRA DAS PALAVRAS EM MAIUSCULAS
        //MANTENDO AS OUTRAS EM MAIUSCULAS
        $nome = "laercio matheus";
        print ("Seu nome e ". ucwords($nome));

        //CASO QUE EU CRIEI ;)
        $nome = "lAerCiO mAtHeUs";
        print ("<br/>Seu nome e 2 ". ucwords(strtolower($nome)));

        
        echo "<hr><p>";
        echo "Funcao STRREV<br/>";
        //VAI MOSTRAR O CONTEUDO DA STRING AO CONTRARIO
        $nome = "laercio matheus";
        print (strrev($nome));

        echo "<hr><p>";
        echo "Funcao STRPOS<br/>";
        /*VAI VERIFICAR EM QUAL POSICAO A STRING ENTRE ASPAS VAI ESTA LOCALIZADA NA VARIAVEL*/
        /*MAS SE MUDAR O TAMANHO DA PALAVRA ENTRE AS ASPAS VAI RESULTAR EM 'falso' OU A STRING VAZIA*/
        $frase = "Estou aprendendo PHP";
        $pos = strpos($frase, "PHP");
        echo "$frase <br/> A string foi encontrada na posicao $pos";

        echo "<hr><p>";
        echo "Funcao STRIPOS<br/>";
        //ESSE 'i' SIGNIFICA IGNOR OU IGNORAR
        /*ESSA FINCAO VAI IGNORAR A CAIXA OU SEJA VAI IGNIRAR O FORMATO DA PALAVRA SE E MAIUSCULA OU MINUSCULA*/
        $frase = "Estou aprendendo PHP";
        $pos = stripos($frase, "php");
        print ("$frase <br/> Encontrei na posição $pos");

        echo "<hr><p>";
        echo "Funcao SUBSTR_COUNT<br/>";
        /*VAI CRIAR UM CONTADOR E CONTAR QUANTAS VEZES A PALAVRA 'PHP' OU QUALQUER PALAVRA APARECE NA FRASE DENTRO DA STRING*/
        $fras = "Estou aprendendo PHP no Curso em Vídeo de PHP";
        $cont = substr_count($fras, "PHP");
        print ("PHP foi encontrado $cont vazes");

        echo "<hr><p>";
        echo "funcao SUBSTR<br/>";
        //substr e um pedaco da string principal
        /*VAI MOSTRAR UMA SUBSTRING DE ACORDO COM A ESPECIFICACAO NA FUNCAO*/
        /*NO CASO VAI MOSTRAR OS VALORES DA POSICAO '0' (LETRA "C") ATE A '5' (LERTA "o")*/
        /*SE COLOCAR APENAS UM VALOR NA FUNCAO VAI MOSTRAR A PARTIR DAQUELE VALOR */
        /*SE EU COLOCAR VALORES NEGATIVOS VAI MOSTRAR AS ULTIMAS LETRAS DE ACORDO COM O NUMERO INDICADO*/
        /*SE EU COLOCAR VALORES NEGATIVOS E ACRECENTAR OURO POSITIVO APOS A FUNCAO VAO PEGAR AS ULTIMAS LETRAS E CONSIDERAR APENAS A QUANTIDADE INFORMADA APOS O NUMERO NEGATIVO*/
        $site = "Curso em Video";
        $sub = substr($site, -5, 2);
        echo "$sub ";
        $sub = substr($site, 9,5);
        echo "$sub ";

        echo "<hr><p>";
        echo "Funcao STR_PAD<br/>";
        /*VAI FAZER UMA DETERMINADA STRING CABER EM UM DETERMINADO ESPACO, NO CASO O TAMANHO VAI SER 30. COMPLEMENTANDO COM O QUE ESTA DENTRO DAS ASPAS DA FUNCAO*/
        /*POSSO COMPLEMENTAR NA ESQUERDA (STR_PAD_LEFT) NA DIREITA (STR_PAD_RIGHT)  E COLOCANDO O NOME NO CENTRO (STR_PAD_CENTER)*/
        // ***NÃO É MAIS 'CENTER' AGORA É BOTH**
        $nome = "Rodrigues";
        $pad = str_pad($nome,30,"x",STR_PAD_RIGHT);
        echo "Meu nome e $pad.<br/>";
        $pad = str_pad($nome,30,"*", STR_PAD_BOTH);
        echo "Meu nome e $pad.<br/>";
        $pad = str_pad($nome,30,"-",STR_PAD_LEFT);
        echo "Meu nome e $pad.";

        echo "<hr><p>";
        echo "Funcao STR_REPEAT<br/>";
        /*ESSA FUNCAO VAI REPETIR A PALAVRA ENTRE ASPAS A QUANTIDADE DE VEZES INFORMADA NA FUNCAO*/
        /*ESSA FUNCAO SERVE PARA REPETIR ALGUMA STRING SEM PRECISAR USAR ESTRUTURA DE REPETICAO */
        $txt = str_repeat("Php ", 10);
        print ("O texto gerado foi $txt <br/>");
        //AQUI VAI GERAR UMA LINHA 85 VEZES
        print (str_repeat("-", 85));

        echo "<hr><p>";
        echo "Funcao STR_REPLACE<br/>";
        /*VAI SUBSTITUIR A PALAVRA INDICADA (Matemática) PELA OUTRA TAMBEM INDICADA (PHP)*/
        $frase = "Gosto de estudar Matemática! :) e Matemática e muito legal";
        //POSSO COLOCAR O 'i' PARA IGNORAR A CAIXA DO TEXTO (MAUISCULA E MINUSCULA)
        $novaFrase = str_ireplace("matemática", "PHP", $frase);
        print ($novaFrase. "<br/>");
        $novaFrase = str_ireplace("gosto", "Adoro", $frase);
        print ($novaFrase);
    ?>
</body>
</html>