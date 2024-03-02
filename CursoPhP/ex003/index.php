<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritiméticos</title>
</head>
<body>
    <?php 
    $n1 = 3;
    $n2 = 2;
    $s = $n1 + $n2;
    echo "A soma entre $n1 e $n2 é igual a $s. <br/>";

    $n3 = $_GET["a"];
    $n4 = $_GET["b"];
    echo "<h2>Valores recebidos: $n3 e $n4</h2>";
    $m = ($n3 + $n4) / 2;
    echo "<br/>A soma vale ". ($n3 + $n4);
    echo "<br/>A subtração vale ". ($n3 - $n4);
    echo "<br/>A multiplicação vale ". ($n3 * $n4);
    echo "<br/>A divisão vale ". ($n3 / $n4);
    echo "<br/>O módulo vale ". ($n3 % $n4);
    echo "<br/> A média vale $m";
    ?>

    <!--HTML-->
    <h1>Operadores</h1>
    <p>Adição: $r = $a + $b</p>
    <p>Subtração: $r = $a - $b</p>
    <p>Multiplicação: $r = $a * $b</p>
    <p>Divisão: $r = $a / $b</p>
    <p>Módulo: $r = $a % $b</p>
</body>
</html>