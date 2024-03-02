<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Rotinas externas</title>
</head>
<body>
    <?php
      //INCUIR DO ARQUIVO 'funcoes.php'
        include "funcoes.php"; /*OU O require*/

        /*O 'include' QUANDO ELE NAO CONSEGUE ENCONTRA O ARQUIVO PARA INCLUIR A FUNCAO ELE CONTINUA TENTANDO EXECUTAR AS DEMAIS FUNCOES*/

        /*JA O 'require' QUANDO ELE NAO CONSEGUE ENCONTRAR O ARQUIVO ELE PARA DE EXECUTAR E NAO TEM MAIS RESPOSTA NA EXCUCAO*/


        /* 'include_once' E 'require_once' EU VOU TENTAR INCLUIR E SE JA ESTIVER CARREGADO NAO VOU CARREGAR DENOVO, MAS SE NAO ESTIVER CARREGADO VAI CARREGAR PELA PRIMEIRA VEZ */

        /*O _once SIGNIFICA QUE VAI CARREGAR APENAS UMA VEZ IDEPENDENTE DE QUANTAS VEZES EU COLOCAR NO SCRIPT*/

        echo "<h1>Testando novas funções</h1>";
        ola();

        mostraValor(100);

        echo "<h2>Finalizando o Meu Programa....</h2>";
    ?>
</body>
</html>