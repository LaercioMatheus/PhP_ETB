<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculando fatorial</title>
</head>
<body>
    <?php
        $num = isset($_GET["n"]) ? $_GET["n"] : 1;
        echo "<h1>Calculando o fatorial de $num.</h1>";
        $i = $num;
        $fat = 1;
        $n = $i;

        do {
            $fat *= $i;
            $i--;
        } while ($i >= 1);
        echo "<h2>$num ! = $fat </h2>";  

        while ($n >= 1) {
            $n += $i;
            echo "$n x ";
            $n--;
        }
    ?>

    <p><a href="index.html" class="botao">Voltar</a></p>
</body>
</html>