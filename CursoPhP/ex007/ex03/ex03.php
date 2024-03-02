<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylephp.css">
    <title>ex03php</title>
</head>
<body>
    <?php
        $nota1 =  isset($_GET["n1"]) ? $_GET["n1"] : 0.0;
        $nota2 =  isset($_GET["n2"]) ? $_GET["n2"] : 0.0;
        $media = ($nota1 + $nota2)/2;
        echo "A 1° nota é <strong>".number_format($nota1, 1)."</strong> e a 2° nota é <strong>".number_format($nota2, 1) ."</strong><br/>";
        echo "A média das notas é <strong>". number_format($media, 1)."</strong><p/>";

        if ($media >= 0 && $media < 5) {
            echo "SITUAÇÃO: <strong>Reprovado :(</strong>";
        } elseif ($media >= 5 && $media <= 7) {
            echo "SITUAÇÃO: <strong>Recuperação :|</strong>";
        } elseif ($media > 7 && $media <= 10) {
            echo "SITUAÇÃO: <strong>Aprovado :)</strong>";
        }
    ?>
    <p></p>
    <a href="index.html">Voltar</a>
</body>
</html>