<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Atribuições</title>
</head>
<body>
    <?php
    /*    $n1 = 4;
        $n2 = 1;
        $n3 = 5;
        echo "Os valores são: $n1, $n2, e $n3";
        //OS VALORES DAS VARIÁVEIS SENDO CALCULADOS
        $r = $n2 += $n3;
        echo "<br/> A soma dos valores são: $r"

        $n1 = 0;
        $n2 = 0;
        $n3 = 0;
        $n4 = 0;
        for ($c = 1; $c <= 10; $c += 1) {
            echo "<br/>Os valores contados: $c";
            $c++;
        }
        echo "<br/>$n1 , $n2 , $n3 , $n4";
    */

    $preco = $_GET["p"];
    echo "O preço do produto é: R$ ". number_format($preco, 2);
    $preco += $preco*10/100;
    echo "<br/> O novo preço com 10% de almento será R$ ". number_format($preco, 2);

echo "<p></p>";

    $prec = $_GET["pr"]; //AQUI VAI PEGAR O ANO ATUAL PELA URL
    echo "<br/> O preço do segundo produto é R$ $prec";
    $prec -= $prec*10/100;
    echo "<br/> O preço com 10% de desconto será $prec";

    /*(POS/PRE) DECREMENTO E ACREMENTO.
    * VARIÁVEL'++'
    * VARIÁVEL'--'
    * '++'VARIÁVEL
    * '--'VARIÁVEL
    */

    $atual = $_GET["aa"];
    echo "<p/><br> O ano atual é $atual e o ano anterior é ". --$atual;
    echo "<p/>";

    //VARIÁVEIS DE REFERÊNCIA
    $a = 3;
    $b = $a;
    $b += 5;
    echo "A variavel A vale: $a";
    echo "<br/> A variavel B vale: $b";

    echo "<p/>";

    //VARIÁVEIS REFENCIADAS DE 'B' PARA 'A'
    $a = 3;
    $b = &$a;
    $b += 5;
    echo "A variavel A vale: $a";
    echo "<br/> A variavel B vale: $b";

    echo "<p/>";

    //VARIAVEIS DE VARIAVEIS CRIANDO UMA A PARTIR DO CONTEÚDO DA OUTRA
    $site = "cursoemvideo";
    $$site = "cursoPHP";
    echo "<br/>O valor da variável (site): $site";
    echo "<br/>O valor da variável (cursoemvideo): $cursoemvideo";
    ?>
</body>
</html>