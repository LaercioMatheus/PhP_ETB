<html>
  <head>
	<head lang="pt-br">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Média Aritimetica PhP</title>
  </head>
  <body>
  <!--TENHO QUE COMPLETAR ESSE EXERCICIO-->
    <h1>CALCULA MÉDIA<h1>
	
	<?php
	//RECEBENDO AS NOTAS (ENTRADA)
		$nome = $_POST["nome"];
		$nota1 = $_POST["nota1"];
		$nota2 = $_POST["nota2"];
		$nota3 = $_POST["nota3"];
		$nota4 = $_POST["nota4"];
		
		//CALCULO DA MEDIA (PROCESSAMENTO)
		$calc = ($nota1 + $nota2 + $nota3 + $nota4)/4;
		
		//MOSTRANDO A MEDIA FINAL (SAIDA)
		echo "A média do aluno $nome é igual a $calc";
	?>
  </body>
</html>