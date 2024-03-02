<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Operadores Relacionais</title>
</head>
<body>
    <?php
    //OPERADORES TERNARIOS
    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    $tipo = $_GET["op"];
    echo "Os valores foram $n1 e $n2 <br/>";
    $r = ($tipo == "s") ? $n1+$n2 : $n1*$n2;
    echo "O resultado será $r";

    echo "<p/>";

    //VALORES IGUAIS USA O '==' E IDENTICOS USA O '==='
    //PARA ALGO SER IDENTICAS, PRECISA SER IGUAIS, IDENTICAS E DO MESMO TIPO
    $a = 3;
    $b = "3";
    $r = ($a == $b) ? "SIM" : "NÃO";
    $res = ($a === $b) ? "SIM" : "NÃO";
    echo "As variaveis A e B sao iguais? $r";
    echo "<br/>As variaveis A e B sao iguais e do mesmo tipo? $res"; //IDENTICAS

    echo "<p/>";

    //SITUAÇÃO DO ALUNO
    $nota1 = $_GET["n1"];
    $nota2 = $_GET["n2"];
    $m = ($nota1 + $nota2)/2; # ORDEM DE PRECEDENCIA
    echo "A media entre $nota1 e $nota2 é: $m <br/>";
    
    echo "A sua situação é ". (($m < 6) ? "Reprovado :(" : "Aprovado :)");

    echo "<p/>";

    //OBRIGATORIEDADE DE VOTO
    $nasc = $_GET["na"];
    $idade = 2024 - $nasc;
    echo "Quem nasce em $nasc tem $idade anos de idade, ";
    $voto = ($idade >= 18 &&/*ou 'AND'*/ $idade < 65) ? "OBRIGATORIO": "NAO OBRIGATORIO";
    echo "e seu voto é $voto";
    ?>
</body>
</html>