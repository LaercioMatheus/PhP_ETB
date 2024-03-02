<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tabuada-PhP</title>
</head>
<body>
    <?php
    $n = isset($_GET["opc"]) ? $_GET["opc"] : 1;
    echo "<h1>Mostrando a Tabuada de $n</h1>";
    $i = 1;
    $c = 1;

    do {
        $c = $n * $i;
        echo "$n x $i = <span>$c</span><br/>";
        $i++;
    } while ($i <= 10);
    ?>

    <p><a href="indexform.php">Voltar</a></p>
</body>
</html>