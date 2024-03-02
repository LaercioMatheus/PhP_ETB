<html>
  <head>
	<head lang="pt-br">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Média Aritimetica PhP</title>
  </head>
  <body>
    <h1>CALCULA MÉDIA<h1>
	
	<?php
	//RECEBENDO AS NOTAS (ENTRADA)
		$sal = $_POST["sal"];
		
		//CALCULO DA MEDIA (PROCESSAMENTO)
		$reaj = $sal + ($sal * 0.1);
		
		//MOSTRANDO A MEDIA FINAL (SAIDA)
		echo "O salario reajustado é igual a R$$reaj";
	?>
  </body>
</html>