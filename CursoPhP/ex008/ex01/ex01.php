<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylephp.css">
    <title>php</title>
</head>
<body>
    <?php   
    $num = isset($_GET["num"]) ? $_GET["num"] : 0;
    $tipon = isset($_GET["tipon"]) ? $_GET["tipon"] : 1;

        //Escolha 
        switch ($tipon) {
        case 1:
            $dob = ($num * 2);
            echo "O Dobro do numero $num é ". number_format($dob, 2);
            break;
        case 2:
            $cub = $num ^ 3;
            echo "O Cubo do numero $num é ". number_format($cub, 2);
            break;
        case 3:
            $rq = sqrt($num); //ou $rq ^ (1/2) e 0.5
            echo "A Raíz Quadrada do numero $num é ". number_format($rq, 2);
            break;
        default:
            echo "Erro!@#$%$!1#@!!@!$##!@$#@$!#!";
        }
    ?>
    <p>
    <a href="index.html">Voltar</a>
</body>
</html>