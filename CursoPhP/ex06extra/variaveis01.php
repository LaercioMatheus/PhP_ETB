<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Variaveis de referencia</title>
</head>
<body>
    <?php
    # AQUI E AS VARIAVEIS RECEBENDO OS VALORES
        $a = 3;
        $b = $a;
        $b += 5;
        echo "A variavel A vale $a";
        echo "<br/> A variavel B vale $b";
        echo "<p>";

        #AQUI AS VARIAVEIS SENDO REFERENCIADAS COM O CARACTERE '&'
        $a = 3;
        $b = &$a; /*/**aqui *//*/** */
        $b += 5;
        echo "A variavel A vale $a";
        echo "<br/> A variavel B vale $b";
    ?>
</body>
</html>