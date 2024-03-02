<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>formul-HTML</title>
</head>
<body>
    <div>
        <form method="get" action="tabuada.php">
            Número:
                <select name="opc">
                    <?php
                    $c = 1;
                    do {
                        echo "<option value='$c'>$c</option>";
                        $c++;
                    } while ($c <= 10);
                    ?>
                </select>

                <p><input type="submit" name="tab" value="Tabuada" class="botao"/></p>
        </form>
    </div>    
</body>
</html>