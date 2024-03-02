<html>
  <head>
    <title>Aprendendo HTML</title>
  </head>
  <body>
    <h1>Cadastro Pessoal<h1>
	
	<!--tenho que informar para onde vai enviar (a 'action') e como vai enviar ( o 'method')-->
	<!--Formulario para enviar os dados para o arquivo para mostrar os dados-->
	<form action="recebe_dados.php" method="get">
		<p>
			Nome: <input type="text" name="nome">
		</p>
		
		<p>
			Sobrenome: <input type="text" name="sobrenome">
		</p>
		
		<p>
			E-mail: <input type="email" name="email">
		</p>
		
		<p>
			Idade: <input type="number" name="idade">
		</p>
		
		<p>
			<input type="submit" value="Cadastrar">
		</p>
	</form>
	
	<?php
		
	?>
  </body>
</html>