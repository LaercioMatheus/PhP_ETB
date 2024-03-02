<html lang="pt-br">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width" />
		<title>Calculadora PhP</title>
  	</head>
  <body>
  <!--TENHO QUE COMPLETAR ESSE EXERCICIO-->
    <h1>CALCULADORA<h1>
	
	<form action="resultado.php" method="get">
		<p>
			Valor 1: <input type="number" name="n1"><br>
			
			Valor 2: <input type="number" name="n2"> <br>
			
			<label for="opc">Operador:
				<select name="opc" id="opc">
					<option value="1">Soma</option>
					<option value="2">Subtração</option>
					<option value="3">Multiplicação</option>
					<option value="4">Divisão</option>
				</select>
			</label>
		</p>

		<p>
			<input type="submit" value="Calcular">
		</p>
	</form>
	
	<?php
		
	?>
  </body>
</html>