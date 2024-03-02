<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulário</title>
</head>
<body>
    <div>
        <form method="get" action="contagem.php">
            Inicio: <input type="number" name="num1" placeholder="1,2,3..."><br/>
            Final: <input type="number" name="num2"  placeholder="1,2,3..."><br/>
            Incremento:
            <?php
                echo "<select type='number' name='esc'>
                    <option value='1'>1</option>
                    <option value='2'>2</option>
                    <option value='3'>3</option>
                    <option value='4'>4</option>
                    <option value='5'>5</option>
                </select>";
            ?>
            <p>
            <input type="submit" value="Calcular" class="botao"/>
        </form>
    </div>
</body>
</html>