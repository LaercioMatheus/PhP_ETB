<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>exercicio01.Php</title>
</head>
<body>
    <?php
    //ESSA FUNCAO VAI PASSAR O VALOR DA VARIAVEL 'a' POR VALOR PELA VARIAVEL 'x'
    echo "<h1>Passagem por VALOR</h1>";
        function teste ($x) {
            $x += 2;
            echo "O valor de X é $x<p>";
        }

        $a = 3;
        teste($a);
        echo "<p>O valor de A e $a</p>";

        //AQUI O VALOR DA VARIAVEL 'a' POR REFERENCIA PELA VARIAVEL 'x' E QUALQUER ALTERACAO NA VARIAVEL 'x' VAI MUDAR O VALOR DA VARIAVEL 'a'
        echo "<h1>Passagem por REFERENCIA</h1>";
        function test (&$x) {
            $x+= 2;
            echo "<p>O valor de X é $x</p>";
        }

        $a = 3;
        test($a);
        echo "O valor de A e $a<p>";
    ?>
</body>
</html>