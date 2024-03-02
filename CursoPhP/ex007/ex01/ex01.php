<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>ex01php</title>
</head>
<body>
    <?php
        $a = isset($_GET["ano"]) ? $_GET["ano"] : 1990;
        $i = date("Y") - $a;
        echo "Voce nasceu em $a e tera $i anos";

        if ($i >= 18) {
            $v = "ja pode votar";
            $d = "ja pode dirigir";
        } else {
            $v = "nao pode votar";
            $d = "nao pode dirigir";
        }
        echo "<br/>Com essa idade voce $v e tambem $d";
    ?>
</body>
</html>