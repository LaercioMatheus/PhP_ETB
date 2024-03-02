<html>
  <head>
    <title>Calculadora PhP</title>
  </head>
  <body>
    <h1>CALCULADORA<h1>
	
	<?php
	    //ENTRADA DE DADOS
		$n1 = $_GET["n1"];
		$n2 = $_GET["n2"];
		$op = $_GET["opc"];
		

		//PROCESSAMENTO DOS DADOS DO PROGRAMA
		//CONDIÇÃO DO OPERADOR
		if ($op == 1) {
			$op = "soma";
			$res = $n1 + $n2;
		} else if ($op == 2) {
			$res = $n1 - $n2;
			$op = "subtração";
		} else if ($op == 3) {
			$res = $n1 * $n2;
			$op = "multiplicação";
		} else {
			$res = $n1 / $n2;
			$op = "divisão";
		}
		
		//RESULTADO DO PROCESSAMENTO SENDO MOSTRADO NA TELA
		echo "<p>O resultado da $op entre $n1 e $n2 é = $res</p>";
	?>
  </body>
</html>