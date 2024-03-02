<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>exerPhP2</title>
</head>
<body>
    <?php
    //ESSE AQUI
    /*    $c = 1;
        $vlr = isset($_GET["v$c"]) ? $_GET["v$c"] : 0;
        while ($c <= 5) {
            echo "Valor $c : ". $_GET["v$c"]. "<br/>";
            $c++;
        }*/


        /*OU ESSE AQUI DEBAIXO*/
        //O BLOCO DE CÓDIGO QUE VAI PEGAR OS DADOS DA URL
        $i = 1;
        while ($i <= 5) {
            $v = "num".$i;
            $url = "v" . $i;
            $$v = isset($_GET[$url]) ? $_GET[$url] : 0;
            $i++;
        }


        //TEM QUE COLOCAR O '$' NA FRENTE.
        //echo "$num1 $num2 $num3 $num4 $num5";
            
                /********OU***********/

        //O BLOCO DE CÓDIGO QUE VAI PEGAR OS VALORES E MOSTRAR NA TELA
        $i = 1;
        while ($i <= 5) {
            $v = "num" .$i;
            echo "Valor $i : " . $$v . "<br/>";
            $i++;
        }
    ?>
</body>
</html>