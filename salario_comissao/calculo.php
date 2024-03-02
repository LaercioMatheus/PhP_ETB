<html>
  <head>
	<head lang="pt-br">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Salario Comissão PhP</title>
  </head>
  <body>
    <h1>CALCULA MÉDIA<h1>
	
	<?php
	//RECEBENDO AS NOTAS (ENTRADA)
		$sal = $_POST["sal"];
		$vendas = $_POST["vendas"];
		
		//CALCULO DA MEDIA (PROCESSAMENTO)
		
		$salfinal = $sal + ($vendas * 0.15);
		
		//MOSTRANDO A MEDIA FINAL (SAIDA)
		echo "O salario reajustado é igual a R$$salfinal";
	?>
  </body>
</html>