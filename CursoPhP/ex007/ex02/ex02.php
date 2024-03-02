<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylephp.css">
    <title>ex01php</title>
</head>
<body>
    <?php
        $a = isset($_GET["ano"]) ? $_GET["ano"] : 1990;
        $i = date("Y") - $a;
        echo "Voce nasceu em $a e tera $i anos";

        if ($i < 16) {
            $tipoVoto = "nao vota";
        } elseif (($i >= 16 && $i < 18) || ($i > 65)) {
                $tipoVoto = "voto opcional";
        }
        else {
            $tipoVoto = "voto obrigatorio";
        }
        echo "<br/>Para essa idade, $tipoVoto";
    ?>
    <p></p>
    <a href="index.html">Voltar</a>
</body>
</html>